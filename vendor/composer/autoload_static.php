<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d701f16dfd71c074a2d742ddf5e4c82
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpFastCache\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Cache\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpFastCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
    );

    public static $classMap = array (
        'AddChildCommand' => __DIR__ . '/../..' . '/commands/AddChildCommand.php',
        'BaseCommand' => __DIR__ . '/../..' . '/commands/BaseCommand.php',
        'Family' => __DIR__ . '/../..' . '/classes/Family.php',
        'FeedFamilyCommand' => __DIR__ . '/../..' . '/commands/FeedFamilyCommand.php',
        'GirlChildCommand' => __DIR__ . '/../..' . '/commands/GirlChildCommand.php',
        'MeetTheFamilyCommand' => __DIR__ . '/../..' . '/commands/MeetTheFamilyCommand.php',
        'Member' => __DIR__ . '/../..' . '/classes/Member.php',
        'Psr\\Cache\\CacheException' => __DIR__ . '/..' . '/psr/cache/src/CacheException.php',
        'Psr\\Cache\\CacheItemInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemInterface.php',
        'Psr\\Cache\\CacheItemPoolInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemPoolInterface.php',
        'Psr\\Cache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/cache/src/InvalidArgumentException.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Application' => __DIR__ . '/..' . '/symfony/console/Application.php',
        'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => __DIR__ . '/..' . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
        'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
        'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
        'Symfony\\Component\\Console\\Command\\Command' => __DIR__ . '/..' . '/symfony/console/Command/Command.php',
        'Symfony\\Component\\Console\\Command\\HelpCommand' => __DIR__ . '/..' . '/symfony/console/Command/HelpCommand.php',
        'Symfony\\Component\\Console\\Command\\ListCommand' => __DIR__ . '/..' . '/symfony/console/Command/ListCommand.php',
        'Symfony\\Component\\Console\\Command\\LockableTrait' => __DIR__ . '/..' . '/symfony/console/Command/LockableTrait.php',
        'Symfony\\Component\\Console\\ConsoleEvents' => __DIR__ . '/..' . '/symfony/console/ConsoleEvents.php',
        'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => __DIR__ . '/..' . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
        'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => __DIR__ . '/..' . '/symfony/console/Descriptor/ApplicationDescription.php',
        'Symfony\\Component\\Console\\Descriptor\\Descriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/Descriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => __DIR__ . '/..' . '/symfony/console/Descriptor/DescriptorInterface.php',
        'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/JsonDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/MarkdownDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/TextDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/XmlDescriptor.php',
        'Symfony\\Component\\Console\\EventListener\\ErrorListener' => __DIR__ . '/..' . '/symfony/console/EventListener/ErrorListener.php',
        'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleCommandEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleErrorEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleExceptionEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleExceptionEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleTerminateEvent.php',
        'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/CommandNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/console/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidOptionException.php',
        'Symfony\\Component\\Console\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/console/Exception/LogicException.php',
        'Symfony\\Component\\Console\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/console/Exception/RuntimeException.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatter.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyle.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
        'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DebugFormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DescriptorHelper.php',
        'Symfony\\Component\\Console\\Helper\\FormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/FormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\Helper' => __DIR__ . '/..' . '/symfony/console/Helper/Helper.php',
        'Symfony\\Component\\Console\\Helper\\HelperInterface' => __DIR__ . '/..' . '/symfony/console/Helper/HelperInterface.php',
        'Symfony\\Component\\Console\\Helper\\HelperSet' => __DIR__ . '/..' . '/symfony/console/Helper/HelperSet.php',
        'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => __DIR__ . '/..' . '/symfony/console/Helper/InputAwareHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProcessHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProcessHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressBar' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressBar.php',
        'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressIndicator.php',
        'Symfony\\Component\\Console\\Helper\\QuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/QuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/SymfonyQuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\Table' => __DIR__ . '/..' . '/symfony/console/Helper/Table.php',
        'Symfony\\Component\\Console\\Helper\\TableCell' => __DIR__ . '/..' . '/symfony/console/Helper/TableCell.php',
        'Symfony\\Component\\Console\\Helper\\TableSeparator' => __DIR__ . '/..' . '/symfony/console/Helper/TableSeparator.php',
        'Symfony\\Component\\Console\\Helper\\TableStyle' => __DIR__ . '/..' . '/symfony/console/Helper/TableStyle.php',
        'Symfony\\Component\\Console\\Input\\ArgvInput' => __DIR__ . '/..' . '/symfony/console/Input/ArgvInput.php',
        'Symfony\\Component\\Console\\Input\\ArrayInput' => __DIR__ . '/..' . '/symfony/console/Input/ArrayInput.php',
        'Symfony\\Component\\Console\\Input\\Input' => __DIR__ . '/..' . '/symfony/console/Input/Input.php',
        'Symfony\\Component\\Console\\Input\\InputArgument' => __DIR__ . '/..' . '/symfony/console/Input/InputArgument.php',
        'Symfony\\Component\\Console\\Input\\InputAwareInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputAwareInterface.php',
        'Symfony\\Component\\Console\\Input\\InputDefinition' => __DIR__ . '/..' . '/symfony/console/Input/InputDefinition.php',
        'Symfony\\Component\\Console\\Input\\InputInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputInterface.php',
        'Symfony\\Component\\Console\\Input\\InputOption' => __DIR__ . '/..' . '/symfony/console/Input/InputOption.php',
        'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => __DIR__ . '/..' . '/symfony/console/Input/StreamableInputInterface.php',
        'Symfony\\Component\\Console\\Input\\StringInput' => __DIR__ . '/..' . '/symfony/console/Input/StringInput.php',
        'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => __DIR__ . '/..' . '/symfony/console/Logger/ConsoleLogger.php',
        'Symfony\\Component\\Console\\Output\\BufferedOutput' => __DIR__ . '/..' . '/symfony/console/Output/BufferedOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutputInterface.php',
        'Symfony\\Component\\Console\\Output\\NullOutput' => __DIR__ . '/..' . '/symfony/console/Output/NullOutput.php',
        'Symfony\\Component\\Console\\Output\\Output' => __DIR__ . '/..' . '/symfony/console/Output/Output.php',
        'Symfony\\Component\\Console\\Output\\OutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/OutputInterface.php',
        'Symfony\\Component\\Console\\Output\\StreamOutput' => __DIR__ . '/..' . '/symfony/console/Output/StreamOutput.php',
        'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ChoiceQuestion.php',
        'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ConfirmationQuestion.php',
        'Symfony\\Component\\Console\\Question\\Question' => __DIR__ . '/..' . '/symfony/console/Question/Question.php',
        'Symfony\\Component\\Console\\Style\\OutputStyle' => __DIR__ . '/..' . '/symfony/console/Style/OutputStyle.php',
        'Symfony\\Component\\Console\\Style\\StyleInterface' => __DIR__ . '/..' . '/symfony/console/Style/StyleInterface.php',
        'Symfony\\Component\\Console\\Style\\SymfonyStyle' => __DIR__ . '/..' . '/symfony/console/Style/SymfonyStyle.php',
        'Symfony\\Component\\Console\\Terminal' => __DIR__ . '/..' . '/symfony/console/Terminal.php',
        'Symfony\\Component\\Console\\Tester\\ApplicationTester' => __DIR__ . '/..' . '/symfony/console/Tester/ApplicationTester.php',
        'Symfony\\Component\\Console\\Tester\\CommandTester' => __DIR__ . '/..' . '/symfony/console/Tester/CommandTester.php',
        'Symfony\\Component\\Debug\\BufferingLogger' => __DIR__ . '/..' . '/symfony/debug/BufferingLogger.php',
        'Symfony\\Component\\Debug\\Debug' => __DIR__ . '/..' . '/symfony/debug/Debug.php',
        'Symfony\\Component\\Debug\\DebugClassLoader' => __DIR__ . '/..' . '/symfony/debug/DebugClassLoader.php',
        'Symfony\\Component\\Debug\\ErrorHandler' => __DIR__ . '/..' . '/symfony/debug/ErrorHandler.php',
        'Symfony\\Component\\Debug\\ExceptionHandler' => __DIR__ . '/..' . '/symfony/debug/ExceptionHandler.php',
        'Symfony\\Component\\Debug\\Exception\\ClassNotFoundException' => __DIR__ . '/..' . '/symfony/debug/Exception/ClassNotFoundException.php',
        'Symfony\\Component\\Debug\\Exception\\ContextErrorException' => __DIR__ . '/..' . '/symfony/debug/Exception/ContextErrorException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalErrorException' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalErrorException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalThrowableError' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalThrowableError.php',
        'Symfony\\Component\\Debug\\Exception\\FlattenException' => __DIR__ . '/..' . '/symfony/debug/Exception/FlattenException.php',
        'Symfony\\Component\\Debug\\Exception\\OutOfMemoryException' => __DIR__ . '/..' . '/symfony/debug/Exception/OutOfMemoryException.php',
        'Symfony\\Component\\Debug\\Exception\\SilencedErrorContext' => __DIR__ . '/..' . '/symfony/debug/Exception/SilencedErrorContext.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedFunctionException.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedMethodException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedMethodException.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\FatalErrorHandlerInterface' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/FatalErrorHandlerInterface.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MongoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MongoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'phpFastCache\\Api' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Api.php',
        'phpFastCache\\CacheManager' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/CacheManager.php',
        'phpFastCache\\Core\\Item\\ExtendedCacheItemInterface' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Item/ExtendedCacheItemInterface.php',
        'phpFastCache\\Core\\Item\\ItemBaseTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Item/ItemBaseTrait.php',
        'phpFastCache\\Core\\Item\\ItemExtendedTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Item/ItemExtendedTrait.php',
        'phpFastCache\\Core\\Pool\\CacheItemPoolTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Pool/CacheItemPoolTrait.php',
        'phpFastCache\\Core\\Pool\\DriverBaseTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Pool/DriverBaseTrait.php',
        'phpFastCache\\Core\\Pool\\ExtendedCacheItemPoolInterface' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Pool/ExtendedCacheItemPoolInterface.php',
        'phpFastCache\\Core\\Pool\\ExtendedCacheItemPoolTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Pool/ExtendedCacheItemPoolTrait.php',
        'phpFastCache\\Core\\Pool\\IO\\IOHelperTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Core/Pool/IO/IOHelperTrait.php',
        'phpFastCache\\Drivers\\Apc\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Apc/Driver.php',
        'phpFastCache\\Drivers\\Apc\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Apc/Item.php',
        'phpFastCache\\Drivers\\Apcu\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Apcu/Driver.php',
        'phpFastCache\\Drivers\\Apcu\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Apcu/Item.php',
        'phpFastCache\\Drivers\\Cassandra\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Cassandra/Driver.php',
        'phpFastCache\\Drivers\\Cassandra\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Cassandra/Item.php',
        'phpFastCache\\Drivers\\Cookie\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Cookie/Driver.php',
        'phpFastCache\\Drivers\\Cookie\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Cookie/Item.php',
        'phpFastCache\\Drivers\\Couchbase\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Couchbase/Driver.php',
        'phpFastCache\\Drivers\\Couchbase\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Couchbase/Item.php',
        'phpFastCache\\Drivers\\Couchdb\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Couchdb/Driver.php',
        'phpFastCache\\Drivers\\Couchdb\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Couchdb/Item.php',
        'phpFastCache\\Drivers\\Devfalse\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Devfalse/Driver.php',
        'phpFastCache\\Drivers\\Devfalse\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Devfalse/Item.php',
        'phpFastCache\\Drivers\\Devnull\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Devnull/Driver.php',
        'phpFastCache\\Drivers\\Devnull\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Devnull/Item.php',
        'phpFastCache\\Drivers\\Devtrue\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Devtrue/Driver.php',
        'phpFastCache\\Drivers\\Devtrue\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Devtrue/Item.php',
        'phpFastCache\\Drivers\\Files\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Files/Driver.php',
        'phpFastCache\\Drivers\\Files\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Files/Item.php',
        'phpFastCache\\Drivers\\Leveldb\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Leveldb/Driver.php',
        'phpFastCache\\Drivers\\Leveldb\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Leveldb/Item.php',
        'phpFastCache\\Drivers\\Memcache\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Memcache/Driver.php',
        'phpFastCache\\Drivers\\Memcache\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Memcache/Item.php',
        'phpFastCache\\Drivers\\Memcached\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Memcached/Driver.php',
        'phpFastCache\\Drivers\\Memcached\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Memcached/Item.php',
        'phpFastCache\\Drivers\\Memstatic\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Memstatic/Driver.php',
        'phpFastCache\\Drivers\\Memstatic\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Memstatic/Item.php',
        'phpFastCache\\Drivers\\Mongodb\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Mongodb/Driver.php',
        'phpFastCache\\Drivers\\Mongodb\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Mongodb/Item.php',
        'phpFastCache\\Drivers\\Predis\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Predis/Driver.php',
        'phpFastCache\\Drivers\\Predis\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Predis/Item.php',
        'phpFastCache\\Drivers\\Redis\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Redis/Driver.php',
        'phpFastCache\\Drivers\\Redis\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Redis/Item.php',
        'phpFastCache\\Drivers\\Sqlite\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Sqlite/Driver.php',
        'phpFastCache\\Drivers\\Sqlite\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Sqlite/Item.php',
        'phpFastCache\\Drivers\\Ssdb\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Ssdb/Driver.php',
        'phpFastCache\\Drivers\\Ssdb\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Ssdb/Item.php',
        'phpFastCache\\Drivers\\Wincache\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Wincache/Driver.php',
        'phpFastCache\\Drivers\\Wincache\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Wincache/Item.php',
        'phpFastCache\\Drivers\\Xcache\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Xcache/Driver.php',
        'phpFastCache\\Drivers\\Xcache\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Xcache/Item.php',
        'phpFastCache\\Drivers\\Zenddisk\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Zenddisk/Driver.php',
        'phpFastCache\\Drivers\\Zenddisk\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Zenddisk/Item.php',
        'phpFastCache\\Drivers\\Zendshm\\Driver' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Zendshm/Driver.php',
        'phpFastCache\\Drivers\\Zendshm\\Item' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Drivers/Zendshm/Item.php',
        'phpFastCache\\Entities\\DriverStatistic' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Entities/DriverStatistic.php',
        'phpFastCache\\Entities\\ItemBatch' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Entities/ItemBatch.php',
        'phpFastCache\\EventManager' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/EventManager.php',
        'phpFastCache\\Exceptions\\phpFastCacheCoreException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheCoreException.php',
        'phpFastCache\\Exceptions\\phpFastCacheDriverCheckException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheDriverCheckException.php',
        'phpFastCache\\Exceptions\\phpFastCacheDriverException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheDriverException.php',
        'phpFastCache\\Exceptions\\phpFastCacheIOException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheIOException.php',
        'phpFastCache\\Exceptions\\phpFastCacheInvalidArgumentException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheInvalidArgumentException.php',
        'phpFastCache\\Exceptions\\phpFastCacheInvalidConfigurationException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheInvalidConfigurationException.php',
        'phpFastCache\\Exceptions\\phpFastCacheLogicException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheLogicException.php',
        'phpFastCache\\Exceptions\\phpFastCacheRootException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheRootException.php',
        'phpFastCache\\Exceptions\\phpFastCacheSimpleCacheException' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Exceptions/phpFastCacheSimpleCacheException.php',
        'phpFastCache\\Helper\\ActOnAll' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Helper/ActOnAll.php',
        'phpFastCache\\Helper\\CacheConditionalHelper' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Helper/CacheConditionalHelper.php',
        'phpFastCache\\Helper\\Psr16Adapter' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Helper/Psr16Adapter.php',
        'phpFastCache\\Helper\\TestHelper' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Helper/TestHelper.php',
        'phpFastCache\\Proxy\\phpFastCacheAbstractProxy' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Proxy/phpFastCacheAbstractProxy.php',
        'phpFastCache\\Util\\ClassNamespaceResolverTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Util/ClassNamespaceResolverTrait.php',
        'phpFastCache\\Util\\Directory' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Util/Directory.php',
        'phpFastCache\\Util\\Languages' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Util/Languages.php',
        'phpFastCache\\Util\\MemcacheDriverCollisionDetectorTrait' => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache/Util/MemcacheDriverCollisionDetectorTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d701f16dfd71c074a2d742ddf5e4c82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d701f16dfd71c074a2d742ddf5e4c82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d701f16dfd71c074a2d742ddf5e4c82::$classMap;

        }, null, ClassLoader::class);
    }
}
