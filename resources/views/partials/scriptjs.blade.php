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

    function add_Highlight(){
        var div = document.getElementById("highlight")
        var bfAdd = document.getElementById("beforeAdd")
        for (let index = 0; index < 3; index++) {
            var p = document.createElement('p')
            let label = document.createElement('label')
            let input = document.createElement('input');
            
            p.className = "w3-third"

            label.className = "w3-text-grey"
            label.innerText = "High Light"
            
            input.className="w3-input w3-border";
            input.name="hightlight[]";
            input.type="file";
            
            //p.appendChild(label)
            p.appendChild(input); 
            div.insertBefore(p,bfAdd); 
        }
        bfAdd.style.display = "none"
    }
</script>