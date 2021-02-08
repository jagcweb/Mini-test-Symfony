<?php

namespace ContainerSGPC3oL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5639b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1f4d3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties20b5f = [
        
    ];

    public function getConnection()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getConnection', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getMetadataFactory', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getExpressionBuilder', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'beginTransaction', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getCache', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'transactional', array('func' => $func), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->transactional($func);
    }

    public function commit()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'commit', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->commit();
    }

    public function rollback()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'rollback', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getClassMetadata', array('className' => $className), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'createQuery', array('dql' => $dql), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'createNamedQuery', array('name' => $name), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'createQueryBuilder', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'flush', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'clear', array('entityName' => $entityName), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->clear($entityName);
    }

    public function close()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'close', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->close();
    }

    public function persist($entity)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'persist', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'remove', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'refresh', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'detach', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'merge', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'contains', array('entity' => $entity), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getEventManager', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getConfiguration', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'isOpen', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getUnitOfWork', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getProxyFactory', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'initializeObject', array('obj' => $obj), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'getFilters', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'isFiltersStateClean', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'hasFilters', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return $this->valueHolder5639b->hasFilters();
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

        $instance->initializer1f4d3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5639b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5639b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5639b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, '__get', ['name' => $name], $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        if (isset(self::$publicProperties20b5f[$name])) {
            return $this->valueHolder5639b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5639b;

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

        $targetObject = $this->valueHolder5639b;
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
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5639b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5639b;
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
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, '__isset', array('name' => $name), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5639b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5639b;
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
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, '__unset', array('name' => $name), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5639b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5639b;
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
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, '__clone', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        $this->valueHolder5639b = clone $this->valueHolder5639b;
    }

    public function __sleep()
    {
        $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, '__sleep', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;

        return array('valueHolder5639b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1f4d3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1f4d3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1f4d3 && ($this->initializer1f4d3->__invoke($valueHolder5639b, $this, 'initializeProxy', array(), $this->initializer1f4d3) || 1) && $this->valueHolder5639b = $valueHolder5639b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5639b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5639b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
