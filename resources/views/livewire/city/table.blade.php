<div class="card mb-4">
    <h5 class="card-header">City List</h5>
    <hr class="mt-0">
    <div class="card-datatable text-nowrap">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="DataTables_Table_0_length">
                        <label> Show
                            <select wire:model="perPage" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            entries
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label>
                            Search:
                            <input wire:model.debounce.500ms="search" type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="table-responsive" wire:init="loadData">
                <table class="datatables-ajax table dataTable no-footer" id="DataTables_Table_0"
                    aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr>
                            <th class="sorting {{ $sortBy == "name" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('name')" aria-controls="DataTables_Table_0">
                                City
                            </th>
                            <th class="sorting {{ $sortBy == "country" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('country')" aria-controls="DataTables_Table_0">
                                Country
                            </th>
                            <th aria-controls="DataTables_Table_0">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($citys['data'] as $city)
                            <tr>
                                <td><strong>{{ $city['name'] }}</strong></td>
                                <td><strong>{{ $city['country']['name'] }}</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('city.edit', $city['id']) }}"><i
                                                    class="ti ti-pencil me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ route('city.delete', $city['id']) }}"><i
                                                    class="ti ti-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No data found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if (! empty($citys['links']))
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Showing {{ $citys['from'] }} to {{ $citys['to'] }} of {{ $citys['total'] }} entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous @disabled($currentPage == 1)" id="DataTables_Table_0_previous">
                                    <button wire:click="changePage({{ $citys['current_page'] - 1 }})" @disabled($currentPage == 1) aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="previous" class="page-link">
                                        Previous
                                    </button>
                                </li>

                                @for ($i = 1; $i <= $citys['last_page']; $i++)
                                    <li class="paginate_button page-item {{ $citys['current_page'] == $i ? 'active' : ''  }}">
                                        <button wire:click="changePage({{ $i }})" aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="{{ $i }}" class="page-link">
                                            {{ $i }}
                                        </button>
                                    </li>
                                @endfor

                                <li class="paginate_button page-item next @disabled($citys['last_page'] == $currentPage)" id="DataTables_Table_0_next">
                                    <button wire:click="changePage({{ $citys['current_page'] + 1 }})" @disabled($citys['last_page'] == $currentPage) aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="next" class="page-link">
                                        Next
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

</div>
