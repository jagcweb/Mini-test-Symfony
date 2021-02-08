<?php

namespace ContainerEPuzTQd;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9bcac = null;
    private $initializer1519f = null;
    private static $publicProperties0f1a4 = [
        
    ];
    public function getConnection()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getConnection', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getMetadataFactory', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getExpressionBuilder', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'beginTransaction', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getCache', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getCache();
    }
    public function transactional($func)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'transactional', array('func' => $func), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->transactional($func);
    }
    public function commit()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'commit', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->commit();
    }
    public function rollback()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'rollback', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getClassMetadata', array('className' => $className), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'createQuery', array('dql' => $dql), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'createNamedQuery', array('name' => $name), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'createQueryBuilder', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'flush', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'clear', array('entityName' => $entityName), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->clear($entityName);
    }
    public function close()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'close', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->close();
    }
    public function persist($entity)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'persist', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'remove', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'refresh', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'detach', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'merge', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'contains', array('entity' => $entity), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getEventManager', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getConfiguration', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'isOpen', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getUnitOfWork', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getProxyFactory', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'initializeObject', array('obj' => $obj), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'getFilters', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'isFiltersStateClean', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'hasFilters', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return $this->valueHolder9bcac->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer1519f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9bcac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9bcac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9bcac->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, '__get', ['name' => $name], $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        if (isset(self::$publicProperties0f1a4[$name])) {
            return $this->valueHolder9bcac->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bcac;
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
        $targetObject = $this->valueHolder9bcac;
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
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bcac;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9bcac;
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
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, '__isset', array('name' => $name), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bcac;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9bcac;
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
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, '__unset', array('name' => $name), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9bcac;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9bcac;
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
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, '__clone', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        $this->valueHolder9bcac = clone $this->valueHolder9bcac;
    }
    public function __sleep()
    {
        $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, '__sleep', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
        return array('valueHolder9bcac');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1519f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1519f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer1519f && ($this->initializer1519f->__invoke($valueHolder9bcac, $this, 'initializeProxy', array(), $this->initializer1519f) || 1) && $this->valueHolder9bcac = $valueHolder9bcac;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9bcac;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9bcac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
