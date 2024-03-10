@extends('layouts.dashboard')

@section('additional')
@endsection

@section('content')
    <div class="row align-items-center pb40">
        <div class="col-xxl-3">
            <div class="dashboard_title_area">
                <h2>Information Registing User</h2>
                <p class="text">We are glad to see you again!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                    <table class="table-style3 table at-savesearch">
                        <thead class="t-head">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Address</th>
                                <th scope="col">Note</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            @forelse ($userInfos as $userInfo)
                                <tr>
                                    <td class="vam">{{ $userInfo->name }}</td>
                                    <td class="vam">{{ $userInfo->email }}</td>
                                    <td class="vam">{{ $userInfo->phone }}</td>
                                    <td class="vam">{{ $userInfo->province }}</td>
                                    <td class="vam">{{ $userInfo->districts }}</td>
                                    <td class="vam">{{ $userInfo->note }}</td>
                                    <td class="vam">
                                        <div class="d-flex">
                                            <a href="#" class="icon" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit"><span
                                                    class="fas fa-pen fa"></span></a>
                                            <a href="#" class="icon" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete"><span
                                                    class="flaticon-bin"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty  
                                <tr>
                                    <td colspan="7" class="text-center">No data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $userInfos->links('pagination::default') }}
                </div>
            </div>
        </div>
    </div>
@endsection
