$(document).ready(function(){
    var type="";
    $("#productType").change(function () {
        type = this.value;
        var typeId ="#" + type + "-form"
        $("#book-form").css("display","none");
        $("#furniture-form").css("display","none");
        $("#dvd-form").css("display","none");
        $(typeId).css("display","block");  
                      
    });
$("#save").click(function (e) {
    var valid = true;
    if (type == ''){
                e.preventDefault();
                $(".error").text("*Please, choose product type");
            }
    else{
    $("#sku, #name, #price, #size, #height, #width, #length, #weight").each(function() {

            if ($(this).parent().css("display")!="none"){
                    if(!$.trim(this.value).length){
                    e.preventDefault();
                    $(".error").text("*Please, fill out required information");
                }
            }
            
        });}
    $("#price, #size, #height, #width, #length, #weight").each(function(){
        var n = parseInt($(this).val());
        if(n <= 0){
            valid = false;
        }
    })
   

    if (!valid){
        e.preventDefault();
        $(".error").text("*Please, provide the data of indicated type");
    }
});

    $("#delete-button").click(function(e){
        var checkedNum = $('input[name="checkbox[]"]:checked').length;
        if (!checkedNum) {
            e.preventDefault();
        }
    });

    

});