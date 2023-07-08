<?php

namespace App\DataTables;

use App\Models\NewStudent;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NewStudentsDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('NISN', function ($row) {
                return '<td>' . ($row->nisn) . '</td>';
            })
            ->addColumn('jenjang', function ($row) {
                return '<td>' . (($row->jenjang == 1) ? "Tsanawiyah" : "Aliyah") . '</td>';
            })
            ->addColumn('pesantren', function ($row) {
                return '<td>' .
                    (($row->is_pesantren == 1) ?
                        ("<span class='badge badge-dim rounded-pill bg-success'>Yes</span>")
                        : ("<span class='badge badge-dim rounded-pill bg-danger'>No</span>")
                    )
                    . '</td>';
            })
            ->addColumn('tanggal daftar', function ($row) {
                return '<td>' . (\Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y')) . '</td>';
            })
            ->addColumn('action', function ($row) {
                $btn = '<a href="/admin/student/' . $row->id . '/edit" class="btn btn-icon btn-sm btn-warning rounded-circle edit-button mr-2"><em class="icon ni ni-edit-alt"></em></a>';

                $btn = $btn . ' ' . '<button class="btn btn-icon btn-sm btn-danger rounded-circle mr-2"><em class="icon ni ni-trash" onclick="destroyNewStudent(' . $row->id . ')"></em></button>';

                $btn = $btn . ' ' . '<button class="btn btn-icon btn-sm btn-secondary rounded-circle show-modal mr-2" data-id="' . $row->id . '"><em class="icon ni ni-eye"></em></button>';

                $btn = $btn . ' ' . '<a href="#" class="btn btn-icon btn-sm btn-info rounded-circle"><em class="icon ni ni-file-text"></em></a>';

                return $btn;
            })
            ->rawColumns(['jenjang', 'pesantren', 'tanggal daftar', 'action', 'NISN']);
    }

    public function query(NewStudent $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('newstudents-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->searching()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('fullname')->width(330)->searchable(true),
            Column::make('NISN'),
            Column::make('jenjang'),
            Column::make('pesantren'),
            Column::make('tanggal daftar'),
            Column::make('action')->printable(false)->exportable(false)->addClass('gap-2'),
        ];
    }

    protected function filename(): string
    {
        return 'NewStudents_' . date('YmdHis');
    }
}
