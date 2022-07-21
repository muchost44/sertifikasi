<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #1d3557">
    <div class="d-flex justify-content-center" style="width: 95%">
        <a class="navbar-brand h1 m-0" href="#" style="font-size: 30px">PSB Sukoharjo</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    @if (!is_null(session('user')))
    <a  href="/logout" class="btn btn-primary">Logout</a>
        
    @endif
  </nav>