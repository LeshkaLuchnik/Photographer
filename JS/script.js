/* Позволяет увеличивать фотографии */
document.querySelector('#Photos').addEventListener
('click', function(e)
{   
    var id = e.target.id;

    console.log(id);
});

function SearchID(event)
{
    var id = event.target.id;
    var img = document.getElementById(id);
    
    return img.src;
}

function ModalIMG(event)
{
    src = SearchID(event);

    
    var modalBlock = document.getElementById('ModalBlock');
    var modalImg = document.getElementById('ModalIMG');
    var close = document.getElementById('close');

    modalBlock.style.display = 'flex';
    modalImg.src = src;

    
    close.onclick = function() 
    {
        modalBlock.style.display = 'none'; 
    }

    modalBlock.onclick = function(event) 
    {
        if (event.target == modalBlock) 
        {
            modalBlock.style.display = "none";
        }
    }


}
/* Позволяет увеличивать фотографии */