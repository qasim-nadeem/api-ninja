<?php


namespace App\Service;


class QueryService
{

    /**
     * Create a query string for DB facade insert function,
     * receive table name and data array in which keys are column names
     * in table and values are the values to be inserted
     *
     * @param string $name
     * @param array $data
     * @return string
     */
    public function createInsertQuery(string $name, array $data)
    {
        $columns = '';
        $places = '';
        $columns = implode(',', array_keys($data));
        $places = array_map(array($this, 'getQuestionMarks'), array_values($data));
        $places = implode(',', $places);
        $query = 'insert into '.$name.' ('.$columns.') values ('.$places.')';
        return $query;
    }


    /**
     * create an update query for laravel DB facade update function,
     * receives a table name, column name to be updated and its value,
     * condition_column is optional parameter, to make update condition
     * based on column name, its by default id.
     *
     * @param string $tableName
     * @param string $columnName
     * @param $value
     * @return string
     */
    public function createUpdateQuery(string $tableName, string $columnName, $value, $condition_column = 'id')
    {
        if(is_string($value))
            $query = 'update '.$tableName.' set '.$columnName.' = "'.$value.'" where '.$condition_column.' = ?';
        elseif (is_integer($value))
            $query = 'update '.$tableName.' set '.$columnName.' = '.$value.' where '.$condition_column.' = ?';
        return $query;
    }


    /**
     * Create a delete query for laravel DB facade's delete function.
     * it receives a table name from which row is to be deleted and optional,
     * conditional_column param to make a delete condition.
     *
     * @param string $tableName
     * @return string
     */
    public function createDeleteQuery(string $tableName, $condition_column = 'id')
    {
        $query = 'delete from '.$tableName.' where '.$condition_column.' = ?';
        return $query;
    }


    /**
     * helper function, used in CreateInsertQuery function.
     *
     * @return string
     */
    private function getQuestionMarks()
    {
        return '?';
    }
}
