
var modal = {
        init : function(){
            modal.openModal();
            modal.closeModal();
            modal.modalVideo();
            modal.modalViewMore();
        },
       openModal : function(){
             $(".modal").click(function(e){
                var target = $(this).data('target');
                modal._openModal(target)
                 e.preventDefault();
             })
       },
       _openModal : function(target){
            var p = $("#container").offset(); 
            $("#bg_block_left").width( p.left );
            $(".bg_block_left").fadeIn("fast");
            $(target).fadeIn("fast");
            $(target).find(".body_modal").show();
       },
       closeModal : function(){
            $(".close_modal").click(function(){
                $(".block_left").fadeOut("fast");
                $(".bg_block_left").fadeOut("fast");
                return false;
            });
        },
        modalVideo : function(){
            $(".modalVideo").click(function(){
                $(".block_left").hide();
                $(".bg_block_left").hide();
                
                $(".fondo").show();
                $(".fondo .ventana").show();
            });
            
            $(".btn_close").click(function(){
                $(".fondo").hide();
                $(".fondo .ventana").hide();
            });
         
        },
        modalViewMore : function(){
            $(".btn_lista").click(function(){
                $(".block_left").hide();
                $(".bg_block_left").hide();
                
                $(".fondo").show();
                $(".fondo .ventana2").show();
            });
        }
    }