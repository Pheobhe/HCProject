<?php

namespace ContainerYb6AzfV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder45b10 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereefb2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7c4f4 = [
        
    ];

    public function getConnection()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getConnection', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getMetadataFactory', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getExpressionBuilder', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'beginTransaction', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getCache', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getCache();
    }

    public function transactional($func)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'transactional', array('func' => $func), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'wrapInTransaction', array('func' => $func), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'commit', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->commit();
    }

    public function rollback()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'rollback', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getClassMetadata', array('className' => $className), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'createQuery', array('dql' => $dql), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'createNamedQuery', array('name' => $name), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'createQueryBuilder', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'flush', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'clear', array('entityName' => $entityName), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->clear($entityName);
    }

    public function close()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'close', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->close();
    }

    public function persist($entity)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'persist', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'remove', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'refresh', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'detach', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'merge', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getRepository', array('entityName' => $entityName), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'contains', array('entity' => $entity), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getEventManager', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getConfiguration', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'isOpen', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getUnitOfWork', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getProxyFactory', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'initializeObject', array('obj' => $obj), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'getFilters', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'isFiltersStateClean', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'hasFilters', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return $this->valueHolder45b10->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializereefb2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder45b10) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder45b10 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder45b10->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, '__get', ['name' => $name], $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        if (isset(self::$publicProperties7c4f4[$name])) {
            return $this->valueHolder45b10->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45b10;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder45b10;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45b10;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder45b10;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, '__isset', array('name' => $name), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45b10;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder45b10;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, '__unset', array('name' => $name), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder45b10;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder45b10;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, '__clone', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        $this->valueHolder45b10 = clone $this->valueHolder45b10;
    }

    public function __sleep()
    {
        $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, '__sleep', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;

        return array('valueHolder45b10');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereefb2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereefb2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereefb2 && ($this->initializereefb2->__invoke($valueHolder45b10, $this, 'initializeProxy', array(), $this->initializereefb2) || 1) && $this->valueHolder45b10 = $valueHolder45b10;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder45b10;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder45b10;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
