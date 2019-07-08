function x2(t,upv,x1,r) {
      return x1 + r*Math.sin(2*Math.PI*t/upv);
    };

    function y2(t,upv,y1,r) {
      return y1 - r*Math.cos(2*Math.PI*t/upv);
    };

    $(function(){
      function mostrar_hora(){
        var d = new Date();
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();

        $('#textohora').html(h + ':' + m + ':' + s);

        $('#segundos').attr('x2', x2(s,60,80,50)).attr('y2', y2(s,60,80,50))

        $('#minutos').attr('x2', x2(m,60,80,40)).attr('y2', y2(m,60,80,40))

        $('#horas').attr('x2', x2(h,12,80,30)).attr('y2', y2(h,12,80,30))

      }

      setInterval(function(){mostrar_hora();},1000);
      mostrar_hora();

    });
     