<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseCommand' => $baseDir . '/commands/BaseCommand.php',
    'Family' => $baseDir . '/classes/Family.php',
    'MeetTheFamilyCommand' => $baseDir . '/commands/MeetTheFamilyCommand.php',
    'Member' => $baseDir . '/classes/Member.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Symfony\\Component\\Console\\Application' => $vendorDir . '/symfony/console/Application.php',
    'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => $vendorDir . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
    'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => $vendorDir . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
    'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => $vendorDir . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
    'Symfony\\Component\\Console\\Command\\Command' => $vendorDir . '/symfony/console/Command/Command.php',
    'Symfony\\Component\\Console\\Command\\HelpCommand' => $vendorDir . '/symfony/console/Command/HelpCommand.php',
    'Symfony\\Component\\Console\\Command\\ListCommand' => $vendorDir . '/symfony/console/Command/ListCommand.php',
    'Symfony\\Component\\Console\\Command\\LockableTrait' => $vendorDir . '/symfony/console/Command/LockableTrait.php',
    'Symfony\\Component\\Console\\ConsoleEvents' => $vendorDir . '/symfony/console/ConsoleEvents.php',
    'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => $vendorDir . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
    'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => $vendorDir . '/symfony/console/Descriptor/ApplicationDescription.php',
    'Symfony\\Component\\Console\\Descriptor\\Descriptor' => $vendorDir . '/symfony/console/Descriptor/Descriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => $vendorDir . '/symfony/console/Descriptor/DescriptorInterface.php',
    'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => $vendorDir . '/symfony/console/Descriptor/JsonDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => $vendorDir . '/symfony/console/Descriptor/MarkdownDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => $vendorDir . '/symfony/console/Descriptor/TextDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => $vendorDir . '/symfony/console/Descriptor/XmlDescriptor.php',
    'Symfony\\Component\\Console\\EventListener\\ErrorListener' => $vendorDir . '/symfony/console/EventListener/ErrorListener.php',
    'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => $vendorDir . '/symfony/console/Event/ConsoleCommandEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => $vendorDir . '/symfony/console/Event/ConsoleErrorEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleEvent' => $vendorDir . '/symfony/console/Event/ConsoleEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleExceptionEvent' => $vendorDir . '/symfony/console/Event/ConsoleExceptionEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => $vendorDir . '/symfony/console/Event/ConsoleTerminateEvent.php',
    'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => $vendorDir . '/symfony/console/Exception/CommandNotFoundException.php',
    'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/console/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/console/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => $vendorDir . '/symfony/console/Exception/InvalidOptionException.php',
    'Symfony\\Component\\Console\\Exception\\LogicException' => $vendorDir . '/symfony/console/Exception/LogicException.php',
    'Symfony\\Component\\Console\\Exception\\RuntimeException' => $vendorDir . '/symfony/console/Exception/RuntimeException.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => $vendorDir . '/symfony/console/Formatter/OutputFormatter.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => $vendorDir . '/symfony/console/Formatter/OutputFormatterInterface.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyle.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
    'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => $vendorDir . '/symfony/console/Helper/DebugFormatterHelper.php',
    'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => $vendorDir . '/symfony/console/Helper/DescriptorHelper.php',
    'Symfony\\Component\\Console\\Helper\\FormatterHelper' => $vendorDir . '/symfony/console/Helper/FormatterHelper.php',
    'Symfony\\Component\\Console\\Helper\\Helper' => $vendorDir . '/symfony/console/Helper/Helper.php',
    'Symfony\\Component\\Console\\Helper\\HelperInterface' => $vendorDir . '/symfony/console/Helper/HelperInterface.php',
    'Symfony\\Component\\Console\\Helper\\HelperSet' => $vendorDir . '/symfony/console/Helper/HelperSet.php',
    'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => $vendorDir . '/symfony/console/Helper/InputAwareHelper.php',
    'Symfony\\Component\\Console\\Helper\\ProcessHelper' => $vendorDir . '/symfony/console/Helper/ProcessHelper.php',
    'Symfony\\Component\\Console\\Helper\\ProgressBar' => $vendorDir . '/symfony/console/Helper/ProgressBar.php',
    'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => $vendorDir . '/symfony/console/Helper/ProgressIndicator.php',
    'Symfony\\Component\\Console\\Helper\\QuestionHelper' => $vendorDir . '/symfony/console/Helper/QuestionHelper.php',
    'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => $vendorDir . '/symfony/console/Helper/SymfonyQuestionHelper.php',
    'Symfony\\Component\\Console\\Helper\\Table' => $vendorDir . '/symfony/console/Helper/Table.php',
    'Symfony\\Component\\Console\\Helper\\TableCell' => $vendorDir . '/symfony/console/Helper/TableCell.php',
    'Symfony\\Component\\Console\\Helper\\TableSeparator' => $vendorDir . '/symfony/console/Helper/TableSeparator.php',
    'Symfony\\Component\\Console\\Helper\\TableStyle' => $vendorDir . '/symfony/console/Helper/TableStyle.php',
    'Symfony\\Component\\Console\\Input\\ArgvInput' => $vendorDir . '/symfony/console/Input/ArgvInput.php',
    'Symfony\\Component\\Console\\Input\\ArrayInput' => $vendorDir . '/symfony/console/Input/ArrayInput.php',
    'Symfony\\Component\\Console\\Input\\Input' => $vendorDir . '/symfony/console/Input/Input.php',
    'Symfony\\Component\\Console\\Input\\InputArgument' => $vendorDir . '/symfony/console/Input/InputArgument.php',
    'Symfony\\Component\\Console\\Input\\InputAwareInterface' => $vendorDir . '/symfony/console/Input/InputAwareInterface.php',
    'Symfony\\Component\\Console\\Input\\InputDefinition' => $vendorDir . '/symfony/console/Input/InputDefinition.php',
    'Symfony\\Component\\Console\\Input\\InputInterface' => $vendorDir . '/symfony/console/Input/InputInterface.php',
    'Symfony\\Component\\Console\\Input\\InputOption' => $vendorDir . '/symfony/console/Input/InputOption.php',
    'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => $vendorDir . '/symfony/console/Input/StreamableInputInterface.php',
    'Symfony\\Component\\Console\\Input\\StringInput' => $vendorDir . '/symfony/console/Input/StringInput.php',
    'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => $vendorDir . '/symfony/console/Logger/ConsoleLogger.php',
    'Symfony\\Component\\Console\\Output\\BufferedOutput' => $vendorDir . '/symfony/console/Output/BufferedOutput.php',
    'Symfony\\Component\\Console\\Output\\ConsoleOutput' => $vendorDir . '/symfony/console/Output/ConsoleOutput.php',
    'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => $vendorDir . '/symfony/console/Output/ConsoleOutputInterface.php',
    'Symfony\\Component\\Console\\Output\\NullOutput' => $vendorDir . '/symfony/console/Output/NullOutput.php',
    'Symfony\\Component\\Console\\Output\\Output' => $vendorDir . '/symfony/console/Output/Output.php',
    'Symfony\\Component\\Console\\Output\\OutputInterface' => $vendorDir . '/symfony/console/Output/OutputInterface.php',
    'Symfony\\Component\\Console\\Output\\StreamOutput' => $vendorDir . '/symfony/console/Output/StreamOutput.php',
    'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => $vendorDir . '/symfony/console/Question/ChoiceQuestion.php',
    'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => $vendorDir . '/symfony/console/Question/ConfirmationQuestion.php',
    'Symfony\\Component\\Console\\Question\\Question' => $vendorDir . '/symfony/console/Question/Question.php',
    'Symfony\\Component\\Console\\Style\\OutputStyle' => $vendorDir . '/symfony/console/Style/OutputStyle.php',
    'Symfony\\Component\\Console\\Style\\StyleInterface' => $vendorDir . '/symfony/console/Style/StyleInterface.php',
    'Symfony\\Component\\Console\\Style\\SymfonyStyle' => $vendorDir . '/symfony/console/Style/SymfonyStyle.php',
    'Symfony\\Component\\Console\\Terminal' => $vendorDir . '/symfony/console/Terminal.php',
    'Symfony\\Component\\Console\\Tester\\ApplicationTester' => $vendorDir . '/symfony/console/Tester/ApplicationTester.php',
    'Symfony\\Component\\Console\\Tester\\CommandTester' => $vendorDir . '/symfony/console/Tester/CommandTester.php',
    'Symfony\\Component\\Debug\\BufferingLogger' => $vendorDir . '/symfony/debug/BufferingLogger.php',
    'Symfony\\Component\\Debug\\Debug' => $vendorDir . '/symfony/debug/Debug.php',
    'Symfony\\Component\\Debug\\DebugClassLoader' => $vendorDir . '/symfony/debug/DebugClassLoader.php',
    'Symfony\\Component\\Debug\\ErrorHandler' => $vendorDir . '/symfony/debug/ErrorHandler.php',
    'Symfony\\Component\\Debug\\ExceptionHandler' => $vendorDir . '/symfony/debug/ExceptionHandler.php',
    'Symfony\\Component\\Debug\\Exception\\ClassNotFoundException' => $vendorDir . '/symfony/debug/Exception/ClassNotFoundException.php',
    'Symfony\\Component\\Debug\\Exception\\ContextErrorException' => $vendorDir . '/symfony/debug/Exception/ContextErrorException.php',
    'Symfony\\Component\\Debug\\Exception\\FatalErrorException' => $vendorDir . '/symfony/debug/Exception/FatalErrorException.php',
    'Symfony\\Component\\Debug\\Exception\\FatalThrowableError' => $vendorDir . '/symfony/debug/Exception/FatalThrowableError.php',
    'Symfony\\Component\\Debug\\Exception\\FlattenException' => $vendorDir . '/symfony/debug/Exception/FlattenException.php',
    'Symfony\\Component\\Debug\\Exception\\OutOfMemoryException' => $vendorDir . '/symfony/debug/Exception/OutOfMemoryException.php',
    'Symfony\\Component\\Debug\\Exception\\SilencedErrorContext' => $vendorDir . '/symfony/debug/Exception/SilencedErrorContext.php',
    'Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException' => $vendorDir . '/symfony/debug/Exception/UndefinedFunctionException.php',
    'Symfony\\Component\\Debug\\Exception\\UndefinedMethodException' => $vendorDir . '/symfony/debug/Exception/UndefinedMethodException.php',
    'Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler' => $vendorDir . '/symfony/debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.php',
    'Symfony\\Component\\Debug\\FatalErrorHandler\\FatalErrorHandlerInterface' => $vendorDir . '/symfony/debug/FatalErrorHandler/FatalErrorHandlerInterface.php',
    'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler' => $vendorDir . '/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php',
    'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler' => $vendorDir . '/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php',
    'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => $vendorDir . '/symfony/var-dumper/Caster/AmqpCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => $vendorDir . '/symfony/var-dumper/Caster/ArgsStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\Caster' => $vendorDir . '/symfony/var-dumper/Caster/Caster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => $vendorDir . '/symfony/var-dumper/Caster/ClassStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => $vendorDir . '/symfony/var-dumper/Caster/ConstStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => $vendorDir . '/symfony/var-dumper/Caster/CutArrayStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\CutStub' => $vendorDir . '/symfony/var-dumper/Caster/CutStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => $vendorDir . '/symfony/var-dumper/Caster/DOMCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => $vendorDir . '/symfony/var-dumper/Caster/DateCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => $vendorDir . '/symfony/var-dumper/Caster/DoctrineCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => $vendorDir . '/symfony/var-dumper/Caster/EnumStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => $vendorDir . '/symfony/var-dumper/Caster/ExceptionCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => $vendorDir . '/symfony/var-dumper/Caster/FrameStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => $vendorDir . '/symfony/var-dumper/Caster/LinkStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\MongoCaster' => $vendorDir . '/symfony/var-dumper/Caster/MongoCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => $vendorDir . '/symfony/var-dumper/Caster/PdoCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => $vendorDir . '/symfony/var-dumper/Caster/PgSqlCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => $vendorDir . '/symfony/var-dumper/Caster/RedisCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => $vendorDir . '/symfony/var-dumper/Caster/ReflectionCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => $vendorDir . '/symfony/var-dumper/Caster/ResourceCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => $vendorDir . '/symfony/var-dumper/Caster/SplCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => $vendorDir . '/symfony/var-dumper/Caster/StubCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => $vendorDir . '/symfony/var-dumper/Caster/SymfonyCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => $vendorDir . '/symfony/var-dumper/Caster/TraceStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => $vendorDir . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => $vendorDir . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
    'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => $vendorDir . '/symfony/var-dumper/Cloner/AbstractCloner.php',
    'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => $vendorDir . '/symfony/var-dumper/Cloner/ClonerInterface.php',
    'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => $vendorDir . '/symfony/var-dumper/Cloner/Cursor.php',
    'Symfony\\Component\\VarDumper\\Cloner\\Data' => $vendorDir . '/symfony/var-dumper/Cloner/Data.php',
    'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => $vendorDir . '/symfony/var-dumper/Cloner/DumperInterface.php',
    'Symfony\\Component\\VarDumper\\Cloner\\Stub' => $vendorDir . '/symfony/var-dumper/Cloner/Stub.php',
    'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => $vendorDir . '/symfony/var-dumper/Cloner/VarCloner.php',
    'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => $vendorDir . '/symfony/var-dumper/Dumper/AbstractDumper.php',
    'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => $vendorDir . '/symfony/var-dumper/Dumper/CliDumper.php',
    'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => $vendorDir . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
    'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => $vendorDir . '/symfony/var-dumper/Dumper/HtmlDumper.php',
    'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => $vendorDir . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
    'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => $vendorDir . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
    'Symfony\\Component\\VarDumper\\VarDumper' => $vendorDir . '/symfony/var-dumper/VarDumper.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
);
