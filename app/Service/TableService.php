<?php


namespace App\Service;


use Illuminate\Support\Facades\DB;

class TableService
{
    /**
     * @var QueryService
     */
    private $queryService;


    /**
     * TableService constructor.
     * @param QueryService $queryService
     */
    public function __construct(QueryService $queryService)
    {

        $this->queryService = $queryService;
    }


    /*
     * @param string $name
     */
    /**
     * @param string $name
     * @return \Illuminate\Support\Collection
     */
    public function getAllTableRows(string $name)
    {
        return DB::table($name)->select()->get();
    }


    /**
     * @param string $name
     * @param array $data
     */
    public function insertTableRow(string $name, array $data)
    {
        $query = $this->queryService->createInsertQuery($name,$data);
        DB::insert($query, array_values($data));
    }


    /**
     * @param string $name
     * @param int $id
     * @param array $data
     */
    public function updateTableRow(string $name, int $id, array $data)
    {
        foreach ($data as $column => $value)
        {
            $updateQuery = $this->queryService->createUpdateQuery($name, $column, $value);
            $affected = DB::update($updateQuery, [$id]);
            dump($affected);
        }
        die();
    }


    /**
     * @param string $tableName
     * @param $id
     * @return int
     */
    public function deleteTableRow(string $tableName, $id)
    {
        $query = $this->queryService->createDeleteQuery($tableName);
        $deleted = DB::delete($query,[$id]);
        return $deleted;
    }

}
