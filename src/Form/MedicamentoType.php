<?php

namespace App\Form;

use App\Entity\Medicamento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicamentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NombreComercial')
            ->add('Droga')
            ->add('Presentacion')
            ->add('Partida')
            ->add('Lote')
            ->add('Vencimiento')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicamento::class,
        ]);
    }
}
