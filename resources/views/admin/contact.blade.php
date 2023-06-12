<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head');

<body class="dark-edition">
    <div class="wrapper">
        @include('admin.layout.sidebar');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-icon card-header-primary">
                                        <div class="card-icon">
                                            <i class="material-icons">assignment</i>
                                        </div>
                                        <h4 class="card-title ">Contact Table</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <th> ID</th>
                                                    <th>Name </th>
                                                    <th> Email</th>
                                                    <th> Subject </th>
                                                    <th> Message </th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($contacts as $contact)
                                                        <tr>
                                                            <td>
                                                                {{ $contact->id }}
                                                            </td>
                                                            <td>
                                                                {{ $contact->name }}
                                                            </td>
                                                            <td>
                                                                {{ $contact->email }}
                                                            </td>
                                                            <td>
                                                                {{ $contact->subject }}
                                                            </td>
                                                            <td>
                                                                {{ $contact->message }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="https://creative-tim.com/presentation">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/blog">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @include('admin.layout.footer');
</body>

</html>
