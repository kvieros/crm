/**
 * Created by kuriakos on 29/9/2017.
 */
init.push(function () {
    $('#ui-bootbox-alert').on('click', function () {
        bootbox.alert({
                          message: "Hello world!",
                          callback: function() {
                              alert("Hello world callback");
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
    $('#ui-bootbox-prompt').on('click', function () {
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
    });
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

});
