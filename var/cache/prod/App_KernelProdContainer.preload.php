<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
require __DIR__.'/ContainerHQOWSyZ/App_KernelProdContainer.php';
require __DIR__.'/ContainerHQOWSyZ/EntityManager_9a5be93.php';
require __DIR__.'/ContainerHQOWSyZ/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerHQOWSyZ/getValidator_ExpressionService.php';
require __DIR__.'/ContainerHQOWSyZ/getValidator_EmailService.php';
require __DIR__.'/ContainerHQOWSyZ/getValidator_BuilderService.php';
require __DIR__.'/ContainerHQOWSyZ/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerHQOWSyZ/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerHQOWSyZ/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerHQOWSyZ/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslatorService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerHQOWSyZ/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerHQOWSyZ/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerHQOWSyZ/getSessionService.php';
require __DIR__.'/ContainerHQOWSyZ/getServicesResetterService.php';
require __DIR__.'/ContainerHQOWSyZ/getSerializer_Mapping_CacheClassMetadataFactoryService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_User_Provider_Concrete_LoginproviderService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_PasswordEncoderService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_EncoderFactory_GenericService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Authentication_Provider_Dao_MainService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Authentication_Listener_Form_MainService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerHQOWSyZ/getSecrets_VaultService.php';
require __DIR__.'/ContainerHQOWSyZ/getRouting_LoaderService.php';
require __DIR__.'/ContainerHQOWSyZ/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerHQOWSyZ/getPropertyInfo_CacheService.php';
require __DIR__.'/ContainerHQOWSyZ/getPropertyAccessorService.php';
require __DIR__.'/ContainerHQOWSyZ/getMonolog_Logger_SecurityService.php';
require __DIR__.'/ContainerHQOWSyZ/getMonolog_Logger_CacheService.php';
require __DIR__.'/ContainerHQOWSyZ/getMimeTypesService.php';
require __DIR__.'/ContainerHQOWSyZ/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeExtension_Upload_ValidatorService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_Type_FormService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_Type_EntityService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_Type_ColorService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_ServerParamsService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_RegistryService.php';
require __DIR__.'/ContainerHQOWSyZ/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerHQOWSyZ/getErrorControllerService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerHQOWSyZ/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerHQOWSyZ/getContainer_GetenvService.php';
require __DIR__.'/ContainerHQOWSyZ/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerHQOWSyZ/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_ValidatorService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_SystemClearerService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_SystemService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_SerializerService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_SecurityExpressionLanguageService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_AppClearerService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_AppService.php';
require __DIR__.'/ContainerHQOWSyZ/getCache_AnnotationsService.php';
require __DIR__.'/ContainerHQOWSyZ/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerHQOWSyZ/getAnnotations_CacheService.php';
require __DIR__.'/ContainerHQOWSyZ/getTemplateControllerService.php';
require __DIR__.'/ContainerHQOWSyZ/getRedirectControllerService.php';
require __DIR__.'/ContainerHQOWSyZ/getTaskEditTypeService.php';
require __DIR__.'/ContainerHQOWSyZ/getTaskCreateTypeService.php';
require __DIR__.'/ContainerHQOWSyZ/getRegisterTypeService.php';
require __DIR__.'/ContainerHQOWSyZ/getUserControllerService.php';
require __DIR__.'/ContainerHQOWSyZ/getTaskControllerService.php';
require __DIR__.'/ContainerHQOWSyZ/get_ServiceLocator_GPh6XLService.php';
require __DIR__.'/ContainerHQOWSyZ/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerHQOWSyZ/get_ServiceLocator_TfvLzuLService.php';
require __DIR__.'/ContainerHQOWSyZ/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerHQOWSyZ/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerHQOWSyZ/get_ServiceLocator_5nX7ca3Service.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_TwigService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_SerializerService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerHQOWSyZ/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'App\Controller\TaskController';
$classes[] = 'Symfony\Component\Security\Core\Security';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\RegisterType';
$classes[] = 'App\Form\TaskCreateType';
$classes[] = 'App\Form\TaskEditType';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Symfony\Component\Notifier\EventListener\NotificationLoggerListener';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\User\UserChecker';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

Preloader::preload($classes);
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityTask.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityUser.php';

$classes = [];
Preloader::preload($classes);
require_once __DIR__.'/twig/00/0025e932b313a761e810b1243962588e6d1ae5aa046ad936856be54b7a4fd029.php';
require_once __DIR__.'/twig/a9/a9a87f99e17f208d0535369cba76db6cf92dab5bd92a16bbce4141b8a2769fc6.php';
require_once __DIR__.'/twig/df/dfc940bdc3c8d53f33866a3b1a33067d385d8fc4d807d8820cdf15c0b139de80.php';
require_once __DIR__.'/twig/4f/4f7ff2cd6fac914d058dcbae56969fcfe37c30b1d72a9b72ecc47684667c53a8.php';
require_once __DIR__.'/twig/e3/e31843164c6232a514645aa456362842be1b9cd3d290c6e85cd9ff20ab4b952e.php';
require_once __DIR__.'/twig/da/dae7046baf5570d1a453fb000559517dd8e24953be7c4e6d3995abcc3838bfcb.php';
require_once __DIR__.'/twig/7b/7bfb2c85fcdde680633756d6bc9ef481d5b9f1c5394b73c87e3f66e24aa4f62b.php';
require_once __DIR__.'/twig/f3/f3ea4f092d8e070592ee11f3f4449c23423732e8b9d3bf64d107aa4d75990030.php';
require_once __DIR__.'/twig/56/567d163dca027b0e6a160360c2cd524c9328d56aa26a4c46708956e331df0e15.php';
require_once __DIR__.'/twig/9d/9ddfb4548eda1e147102c4447c2b63f559bfcaec2bbae086ddefc12a585a7e97.php';
require_once __DIR__.'/twig/b8/b81130495c00f62f273a7388af0b19c63c3a991420cffc1e7c39aabea0be1cd7.php';
require_once __DIR__.'/twig/51/516498c84a34cf4f081761cd198325d820dae264fbaf0252a9c335a8896c43ac.php';
require_once __DIR__.'/twig/57/578bb24856d50a5542e9848f651eb70948bebc2aa141a3078513b59145097df4.php';
require_once __DIR__.'/twig/e4/e4a978444f52c3ca595d06cccfa09d111eaaed69a7220fa7758350bb75602bbb.php';
require_once __DIR__.'/twig/cd/cd9c2997e1e56a83b415ef2418b9c8038ac7d3f96698b060dd7b4bd3c97d67ee.php';
require_once __DIR__.'/twig/30/30f2dd8e5beb4485398ca0550bd2db06d2b5b2d533675193a1d31f7374ae9e4b.php';
require_once __DIR__.'/twig/b5/b59752af0e57059c430db33925506cc6b07dfccc2071db0d55fe1fa567f9a32c.php';
require_once __DIR__.'/twig/4a/4aad53a05e138cbef14d74e33f342724d032d133e8700a8519bc4536db06ab2e.php';
require_once __DIR__.'/twig/67/67241b0a015b77e81862acd7ba4e79c59f002397f5d1281b27a4b43c51329cf5.php';
require_once __DIR__.'/twig/31/31d6bb55fadf66fa7626da92be4d0a2aa3b3e58d32802dda8ef65a4092b45693.php';
require_once __DIR__.'/twig/5a/5a393e7d4f96218c7e22be26e7e424baccc7b92ca7ead16254a6ca96a2b24b51.php';
require_once __DIR__.'/twig/83/83ce669e7e06c91e0b02fdacd42a2d82bcdc04363a52d753bc2408ae17d84002.php';
require_once __DIR__.'/twig/5a/5a54c16795e4b687abe859a0e51afbabd5ee7c69628fcf940169f82d0451491a.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Doctrine\\ORM\\Mapping\\Table';
$classes[] = 'Doctrine\\ORM\\Mapping\\Index';
$classes[] = 'Doctrine\\ORM\\Mapping\\Entity';
$classes[] = 'Doctrine\\ORM\\Mapping\\Column';
$classes[] = 'Doctrine\\ORM\\Mapping\\Id';
$classes[] = 'Doctrine\\ORM\\Mapping\\GeneratedValue';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\NotBlank';
$classes[] = 'Doctrine\\ORM\\Mapping\\ManyToOne';
$classes[] = 'Doctrine\\ORM\\Mapping\\JoinColumns';
$classes[] = 'Doctrine\\ORM\\Mapping\\JoinColumn';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\Type';
$classes[] = 'Symfony\\Component\\Validator\\Constraints\\Email';
$classes[] = 'Doctrine\\ORM\\Mapping\\OneToMany';
Preloader::preload($classes);
