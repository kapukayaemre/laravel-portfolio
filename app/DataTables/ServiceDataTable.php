<?php

namespace App\DataTables;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServiceDataTable extends DataTable
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
                return '<a href="'. route('admin.service.edit', $query->id) .'" class="btn btn-warning btn-style-light"><i class="material-icons">edit_square</i>Düzenle</a>&nbsp;<a href="'. route('admin.service.destroy', $query->id) .'" class="btn btn-danger btn-style-light delete-item"><i class="material-icons">delete</i>Sil</a>';
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Service $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('service-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0)
                    ->selectStyleSingle()
                    ->buttons([]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name')
                ->title('Hizmet Adı')
                ->addClass('text-center'),
            Column::make('description')
                ->title('Hizmet Açıklaması')
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
                ->width(200)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Service_' . date('YmdHis');
    }
}
