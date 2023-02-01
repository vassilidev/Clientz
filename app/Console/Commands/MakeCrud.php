<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MakeCrud extends Command
{
    /**
     * @var string
     */
    private string $partialsPath = 'partials';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate all Crud stuff related to a specific model.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->makeDirectories();
        $this->makeFiles();

        return self::SUCCESS;
    }

    /**
     * Create all the directories needed by the Crud Generator.
     *
     * @return void
     */
    private function makeDirectories(): void
    {
        $this->info('Start generating directories...');

        $this->createIfNoDirectory($this->getPanelPagesPath());
        $this->info($this->getPanelPagesPath() . ' directory created !');

        $this->createIfNoDirectory($this->getPartialsPath());
        $this->info($this->getPartialsPath() . ' directory created !');
    }

    /**
     * Make All the files
     *
     * @return void
     */
    private function makeFiles(): void
    {
        //partials / formClient
        //createClient
        //editClient
        //indexClient
        //showClient

        //ClientController
        //ClientRequest
    }

    /**
     * Return the singular model.
     *
     * @param string $name
     *
     * @return string
     */
    private function getSingularClassName(string $name): string
    {
        return Pluralizer::singular($name);
    }

    /**
     * Return the stub file path
     *
     * @return string
     */
    private function getStubPath(): string
    {
        return resource_path('stubs');
    }

    /**
     * Return the panel pages path.
     *
     * @return string
     */
    private function getPanelPagesPath(): string
    {
        return resource_path('views/pages/panel') . DIRECTORY_SEPARATOR . $this->getLowerModels();
    }

    /**
     * Return the panel pages path.
     *
     * @return string
     */
    private function getPartialsPath(): string
    {
        return $this->getPanelPagesPath() . DIRECTORY_SEPARATOR . $this->partialsPath;
    }

    /**
     * Map the stub variables present in stub to its value
     *
     * @return array
     */
    private function getStubVariables(): array
    {
        return [
            'Model'  => $this->getUcfirstModel(),
            'model'  => $this->getLowerModel(),
            'models' => $this->getLowerModels(),
        ];
    }

    /**
     * Return the ucfirst singular version of the Model.
     *
     * @return string
     * @example users => User
     */
    private function getUcfirstModel(): string
    {
        return Str::ucfirst(
            $this->getSingularClassName(
                $this->argument('model')
            )
        );
    }

    /**
     * Return the lower singular version of the Model.
     *
     * @return string
     * @example users => user
     */
    private function getLowerModel(): string
    {
        return Str::lower(
            $this->getSingularClassName(
                $this->argument('model')
            )
        );
    }

    /**
     * Return the plural lower version of the model.
     *
     * @return string
     * @example User => users
     */
    private function getLowerModels(): string
    {
        return Str::lower(
            $this->getPluralClassName(
                $this->argument('model')
            )
        );
    }

    /**
     * Return the plural version of the model.
     *
     * @param string $name
     *
     * @return string
     */
    private function getPluralClassName(string $name): string
    {
        return Pluralizer::plural($name);
    }

    /**
     * Create a directory if path not exist.
     *
     * @param string $path
     * @param int    $mode
     * @param bool   $recursive
     * @param bool   $force
     *
     * @return void
     */
    private function createIfNoDirectory(string $path, int $mode = 0777, bool $recursive = true, bool $force = true): void
    {
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, $mode, $recursive, $force);
        }
    }
}
