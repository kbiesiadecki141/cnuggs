function FallingNuggs(imgArr){
    var imgCount = 0;
    var randImg = Math.floor(Math.random() * imgArr.length);
    var nugget = $('<img>')
        .attr({
            'src': imgArr[randImg],
            'class':'nuggets',
            'id': 'nugg' + imgCount
        })
        .css({
            position:"absolute",
            left: '150px',
            top: '160px',
            width: '300px',
            height: '300px',
            opacity:1.0
        }).appendTo('#document');
    imgCount++;
    //var falling = true;
    //while (falling){
        /*$(document).click(function(){
            break;
        })
        //$(document).ready(function(){
            for(var i = 0; i < 80; i++){
                var nugget = $('<img>')
                        .attr({
                            'src': imgArr[randImg],
                            'class':'nuggets',
                            'id': 'nugg' + i
                        })
                        .css({
                            position:"absolute",
                            left:10 + (i*10),
                            top: 10,
                            width: '25px',
                            height: '25px',
                            opacity:1.0
                        }).appendTo('#document')
                        /*.animate({
                            top: $('#nugg'+i).attr('top') + 10,
                        }).appendTo('#document')
                console.log(i)
}*/
        //})
    //}
}