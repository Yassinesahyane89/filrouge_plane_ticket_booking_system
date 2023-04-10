<div class="card mb-4">
    <h5 class="card-header">Passenger List</h5>
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
                            <th class="sorting {{ $sortBy == "first_name" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('first_name')" aria-controls="DataTables_Table_0">
                                First Name
                            </th>
                            <th class="sorting {{ $sortBy == "last_name" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('last_name')" aria-controls="DataTables_Table_0">
                                Last Name
                            </th>
                            <th class="sorting {{ $sortBy == "email" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('email')" aria-controls="DataTables_Table_0">
                                Email
                            </th>
                            <th class="sorting {{ $sortBy == "phone" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('phone')" aria-controls="DataTables_Table_0">
                                Phone
                            </th>
                            <th aria-controls="DataTables_Table_0">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($passengers['data'] as $passenger)
                            <tr>
                                <td><strong>{{ $passenger['first_name'] }}</strong></td>
                                <td>{{ $passenger['last_name'] }}</td>
                                <td>{{ $passenger['email'] }}</td>
                                <td>{{ $passenger['phone'] }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('passenger.edit', $passenger['id']) }}"><i
                                                    class="ti ti-pencil me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ route('passenger.delete', $passenger['id']) }}"><i
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

            @if (! empty($passengers['links']))
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Showing {{ $passengers['from'] }} to {{ $passengers['to'] }} of {{ $passengers['total'] }} entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous @disabled($currentPage == 1)" id="DataTables_Table_0_previous">
                                    <button wire:click="changePage({{ $passengers['current_page'] - 1 }})" @disabled($currentPage == 1) aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="previous" class="page-link">
                                        Previous
                                    </button>
                                </li>

                                @for ($i = 1; $i <= $passengers['last_page']; $i++)
                                    <li class="paginate_button page-item {{ $passengers['current_page'] == $i ? 'active' : ''  }}">
                                        <button wire:click="changePage({{ $i }})" aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="{{ $i }}" class="page-link">
                                            {{ $i }}
                                        </button>
                                    </li>
                                @endfor

                                <li class="paginate_button page-item next @disabled($passengers['last_page'] == $currentPage)" id="DataTables_Table_0_next">
                                    <button wire:click="changePage({{ $passengers['current_page'] + 1 }})" @disabled($passengers['last_page'] == $currentPage) aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="next" class="page-link">
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
