<?php

namespace App\DataTables;

use App\Models\Combatant;
use Yajra\DataTables\Services\DataTable;

class GestionCombatantDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', function($query){
                return '<a href="'.route('affiche_combatant',$query->idcombatants).'" class="btn btn-success"><span class="fa fa-eye"><span></a> '.
                        // '<a href="" class="btn btn-primary"><span class="fa fa-edit"><span></a> '.
                       
                '<a href="#"
                     onclick="event.preventDefault(); if(confirm(\'VOULEZ-VOUS VRAIMENT SUPPRIMER '.$query->nom.' ?\')){
                                   document.getElementById(\'destroy-form'.$query->idcombatants.'\').submit();}" class="btn btn-danger">
                      <span class="fa fa-trash"><span>
                  </a>

                  <form id="destroy-form'.$query->idcombatants.'" action="'.route("gestion_combatants.show",["id"=>$query->idcombatants]).'" method="get" style="display: none;">
                      
                      '.csrf_field().'
                      <input name="id" value="'.$query->idcombatants.'"

                  </form>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Combatant $model)
    {
        return $model->JoinCategorie()->get();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '100px'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'nom',
            'prenom',
            'lib'=>['title' => 'Categorie'],
            'poid'
        ];
    }
    protected function getBuilderParameters(){
        return [
           
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'GestionCombatant_' . date('YmdHis');
    }
}
