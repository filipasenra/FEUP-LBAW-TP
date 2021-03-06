<footer class="page-footer bg-light pb-4 pt-4 mt-5">

        <div class="container text-center text-md-left">

            <div class="row text-center d-flex justify-content-center">

                <div class="col md-2 mb-2">
                    <div class="row justify-content-center">
                        <img src="{{ asset('../images/logo.png') }}" width="20" height="25" alt="logo">
                        <h6 class="ml-2">Papagaio</h6>
                    </div>
                </div>

                <a class="col md-2 mb-2 link-color" href="{{ url('home') }}">
                    <h6 class="col md-2 mb-2 font-weight-bold">Home</h6>
                </a>

                <a class="col md-2 mb-2 link-color" href="{{ route('about') }}">
                    <h6 class="col md-2 mb-2 font-weight-bold">Sobre Nós</h6>
                </a>

            </div>
        </div>

        <!-- Copyright -->
        <p class="footer text-center mb-0" style="font-size: 0.7rem">© 2020 Papagaio, Inc.</p>

    </footer>