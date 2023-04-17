<div class="card mb-4">
    <h5 class="card-header">Contact List</h5>
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
                                Name
                            </th>
                            <th class="sorting {{ $sortBy == "email" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('email')" aria-controls="DataTables_Table_0">
                                Email
                            </th>
                            <th class="sorting {{ $sortBy == "mobile" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('mobile')" aria-controls="DataTables_Table_0">
                                mobile
                            </th>
                            <th class="sorting {{ $sortBy == "message" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('message')" aria-controls="DataTables_Table_0">
                                Message
                            </th>
                            <th class="sorting {{ $sortBy == "subject" ? 'sorting_'.$sortDirection : '' }}" wire:click="sortBy('subject')" aria-controls="DataTables_Table_0">
                                Subject
                            </th>
                            <th aria-controls="DataTables_Table_0">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts['data'] as $contact)
                            <tr>
                                <td><strong>{{ $contact['name'] }}</strong></td>
                                <td>{{ $contact['email'] }}</td>
                                <td>{{ $contact['mobile'] }}</td>
                                <td>{{ $contact['message'] }}</td>
                                <td>{{ $contact['subject'] }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                        {{-- <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('contact.delete', $contact['id']) }}"><i
                                                    class="ti ti-trash me-1"></i>
                                                Delete</a>
                                        </div> --}}
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

            @if (! empty($contacts['links']))
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Showing {{ $contacts['from'] }} to {{ $contacts['to'] }} of {{ $contacts['total'] }} entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous @disabled($currentPage == 1)" id="DataTables_Table_0_previous">
                                    <button wire:click="changePage({{ $contacts['current_page'] - 1 }})" @disabled($currentPage == 1) aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="previous" class="page-link">
                                        Previous
                                    </button>
                                </li>

                                @for ($i = 1; $i <= $contacts['last_page']; $i++)
                                    <li class="paginate_button page-item {{ $contacts['current_page'] == $i ? 'active' : ''  }}">
                                        <button wire:click="changePage({{ $i }})" aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="{{ $i }}" class="page-link">
                                            {{ $i }}
                                        </button>
                                    </li>
                                @endfor

                                <li class="paginate_button page-item next @disabled($contacts['last_page'] == $currentPage)" id="DataTables_Table_0_next">
                                    <button wire:click="changePage({{ $contacts['current_page'] + 1 }})" @disabled($contacts['last_page'] == $currentPage) aria-controls="DataTables_Table_0" aria-role="link" data-dt-idx="next" class="page-link">
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
