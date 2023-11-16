<input type="tel" name="code" id="code" autocomplete="off" placeholder="کد ارسال شده به موبایل خود را وارد نمایید" class="text-center form-control">
<span id="result-code"></span>

<script>
    $("#code").on("keyup",function(){
        code = $(this).val();
        if(code.length == 5){
            $.ajax({
                url: "{{ route('check_code') }}",
                cache: false,
                type:"POST",
                data: {"code":code,"mobile":"{{ $mobile }}","_token":"{{ csrf_token() }}"},
                success: function(result){
                    if(result == 0){
                        $("#result-code").html("کد وارد شده نامعتبر است");
                    }else{
                        window.location.reload();
                    }
                }
            });
        }
    });
</script>