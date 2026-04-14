<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:generate:repositories',
    description: 'Generates repository classes for all entities.',
)]
class GenerateRepositoriesCommand extends Command
{
    private $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();

        $this->filesystem = $filesystem;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Generates repository classes for all entities.')
            ->setHelp('This command will generate repository classes for all entities in src/Entity.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Generating repositories for all entities...');

        $finder = new Finder();
        $finder->files()->in('src/Entity')->name('*.php'); // Look for PHP files in the Entity directory

        foreach ($finder as $file) {
            $entityClass = $file->getBasename('.php');
            $repositoryClass = 'App\\Repository\\' . $entityClass . 'Repository';

            // Create the repository class file
            $repositoryCode = <<<PHP
                <?php

                namespace App\Repository;

                use App\Entity\\$entityClass;
                use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
                use Doctrine\Persistence\ManagerRegistry;

                class {$entityClass}Repository extends ServiceEntityRepository
                {
                    public function __construct(ManagerRegistry \$registry)
                    {
                        parent::__construct(\$registry, $entityClass::class);
                    }

                    // Add custom methods as needed
                }
                PHP;

            // Define the repository file path
            $repositoryPath = 'src/Repository/' . $entityClass . 'Repository.php';

            // Only generate if the repository does not already exist
            if (!$this->filesystem->exists($repositoryPath)) {
                $this->filesystem->dumpFile($repositoryPath, $repositoryCode);
                $output->writeln("Generated repository: $repositoryClass");
            } else {
                $output->writeln("Repository already exists for: $entityClass");
            }
        }

        $output->writeln('Repository generation complete!');
        return Command::SUCCESS;
    }
}
