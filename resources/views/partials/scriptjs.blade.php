<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ URL::asset('js/scripts.js') }}"></script>
<script>
    function add_Iternary(){
        let input = document.createElement('input');
        input.className="w3-input w3-border";
        input.name="iternaries[]";
        input.type="text";
        let iternary = document.querySelector('#iternaries');
        iternary.appendChild(input);
     console.log(iternary)
    }
</script>