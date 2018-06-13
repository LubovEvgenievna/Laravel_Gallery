<footer class="indigo page-footer">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <p class="white-text">Админпанель Laravel_Gallery</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <span>2018</span>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="{{ asset('js/adminpanel/main.js') }}"></script>
<script src="{{ asset('js/adminpanel/dropzone.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.button-collapse').sideNav();
        $('.collapsible').collapsible();
        $('select').material_select();
    });
</script>