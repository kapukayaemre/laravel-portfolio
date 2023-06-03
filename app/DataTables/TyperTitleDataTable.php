<?php

namespace App\DataTables;

use App\Models\TyperTitle;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TyperTitleDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('created_at', function ($query) {
                return Carbon::parse($query->created_at)->format('d.m.Y H:i');
            })
            ->addColumn('updated_at', function ($query) {
                return Carbon::parse($query->updated_at)->format('d.m.Y H:i');
            })
            ->addColumn('action', function ($query) {
                return '<a href="'. route('admin.typer-title.edit', $query->id) .'" class="btn btn-warning btn-style-light">Düzenle</a>&nbsp;<a href="'. route('admin.typer-title.destroy', $query->id) .'" class="btn btn-danger btn-style-light">Sil</a>';
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(TyperTitle $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('typertitle-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')
                ->title('ID')
                ->width(30)
                ->addClass('text-center'),
            Column::make('title')
                ->title('Başlık')
                ->addClass('text-center'),
            Column::make('created_at')
                ->title('Kayıt Tarihi')
                ->width(120)
                ->addClass('text-center'),
            Column::make('updated_at')
                ->title('Güncelleme Tarihi')
                ->width(120)
                ->addClass('text-center'),
            Column::computed('action')
                ->title('İşlemler')
                ->exportable(false)
                ->printable(false)
                ->width(180)
                ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'TyperTitle_' . date('YmdHis');
    }
}
