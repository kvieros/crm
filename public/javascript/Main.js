/**
 * Created by kuriakos on 29/9/2017.
 */
init.push(function () {
    /*$('#ui-bootbox-alert').on('click', function () {
        bootbox.alert({
                          message: "Hello world!",
                          callback: function() {
                              alert("Hello world callback");
                          },
                          className: "bootbox-sm"
                      });
    });*/
    $("button[data]").on('click', function () {
        var customer;
        customer = $(this)[0];
        customer = $(customer).attr("data");
        var updateform = document.getElementById('formid');
        updateform.style.display="block";

        bootbox.confirm({
                            title: "Update customer",
                            message: updateform,
                            callback: function(result) {
                                if (result === true)
                                {
                                    var firstname = $('#firstnameid').val();
                                    var lastname = $('#lastnameid').val();
                                    var email = $('#emailid').val();
                                    var mobile = $('#mobileid').val();
                                    var address = $('#addressid').val();
                                    var customertype = $('#customertypeid').val();

                                    var params = "firstname="+firstname+"&lastname="+lastname+"&email="+email+"&mobile="+mobile+"&address="+address+"&customertype="+customertype+"&customer="+customer;

                                    $.ajax({
                                               type: "post",
                                               url: "updatecustomer",
                                               data: params,
                                               success:  function(data){
                                                   window.location.href = "customerlist";
                                               },
                                               error:function(){
                                                   console.log(arguments);
                                               }
                                           })

                                   // window.location.href = "customerlist";
                                }
                                window.location.href = "customerlist";
                            },
                            className: "bootbox-sm"
                        });
    });
    $("button[id]").on('click', function () {
        var button;
        button = $(this)[0];
        button = $(button).attr("id");
        bootbox.confirm({
                            message: "Are you sure you want to delete customer "+$("#"+button).attr("name")+"?",
                            callback: function(result) {
                                if (result === true) {
                                    var params = "id="+button;
                                    $.ajax({
                                               type: "post",
                                               url: "customerlist",
                                               data: params,
                                               success:  function(data){
                                                console.log(data);
                                               },
                                                error:function(){
                                                   console.log(arguments);
                                                }
                                           })
                                }
                            },
                            className: "bootbox-sm"
                        });
    });
    /*$('#ui-bootbox-prompt').on('click', function () {
        bootbox.prompt({
                           title: "What is your name?",
                           callback: function(result) {
                               if (result === null) {
                                   alert("Prompt dismissed");
                               } else {
                                   alert("Hi " + result + "!");
                               }
                           },
                           className: "bootbox-sm"
                       });
    });*/
   /* $("button[id]").on('click', function () {
        var button;
        button = $(this)[0];
        button = $(button).attr("id");
        bootbox.dialog({
                           message: "Are you sure you want to delete customer "+$("#"+button).attr("name"),
                           title: "Delete Customer",
                           buttons: {
                               success: {
                                   label: "Yes",
                                   className: "btn-success"
                               },
                               danger: {
                                   label: "No",
                                   className: "btn-danger"
                               }
                           },
                           className: "bootbox-sm"
                       });
    });*/
    //bootbox.dialog.
});
