<?php


namespace App\Service;


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationService
{


    public const STRING_TYPE = 'string';
    public const INT_TYPE = 'integer';
    public const FLOAT_TYPE = 'float';

    /**
     * Create a simple table with on column only,
     * which is id.
     *
     * @param string $name
     */
    public function createTable(string $name)
    {
        Schema::create($name, function (Blueprint $table) {
            $table->id();
        });
    }


    /**
     * Removes a table from the db if it exist,
     * just like down method in migration.
     *
     * @param string $name
     */
    public function removeTable(string $name)
    {
        Schema::dropIfExists($name);
    }


    /**
     * Create table with specific columns,
     * second argument is 2d array with each element of array contains
     * information about on column.
     *
     * @param string $name
     * @param array $columns
     */
    public function createTableWithColumns(string $name, array $columns)
    {
        Schema::create($name, function (Blueprint $table) use ($columns) {
            $table->id();
            foreach ($columns as $column)
            {
                if($column['type'] == self::STRING_TYPE)
                    $table->string($column['name'])->nullable();
                elseif ($column['type'] == self::INT_TYPE)
                    $table->integer($column['name'])->nullable();
                elseif ($column['type'] == self::FLOAT_TYPE)
                    $table->float($column['name'])->nullable();
            }
        });
    }


}
