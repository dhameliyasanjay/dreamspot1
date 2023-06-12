<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head');

<body class="dark-edition ">
    <div class="wrapper ">
        @include('admin.layout.sidebar');
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <a class="navbar-brand" href=""><h4>Dreamspot</h4></a>
                        <div>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button class="btn btn-primary " type="submit">Logout</button>
                            </form>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end">


                    </div>
                    @include('admin.layout.footer')
</body>

</html>
