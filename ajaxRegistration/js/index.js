let number = document.getElementById('num');
let transfer = document.getElementById('trans');
let showTran = document.getElementById('show-tran');
let formShow = document.getElementById('form-show');
let showForm = document.querySelector('.showForm');
let count = 0;
function button(){
    transfer.style.display = 'none';
    showTran.style.display = 'block';
    let timeOut = setInterval(counting, 100);
    function counting(){
        if(count == 100){
            clearInterval(timeOut);
        }else{
            count ++;
            number.textContent = count+'%';
            if(count == 32){
                clearInterval(timeOut);
                formShow.style.display = 'block';
                return;
                
            }
        }
    }
}

$(function(){
    $('#submit').on('click', function(event){
        event.preventDefault();
        let code = $('#code');
        if(code.val() == ''){
            $('#code_er').html("<span style='color: red; display: block;'>This field is required</span>")
        }else{
            code = code.val();
        }
        if(!code == ''){
            $.ajax({
                url: './controller/bank.php',
                type: 'POST',
                data: {
                    code:code
                },
                beforeSend: function(){
                    $('#submit').html("loading..")
                },
                success: function(response){
                    if(response.done == 'success'){
                        alert("Inserted successfully");
                    }else{
                        alert("Failed to insert");
                    }
                },
                complete: function(){
                    $('#submit').html('Continue')
                }
            })
        }
    })
   
})
