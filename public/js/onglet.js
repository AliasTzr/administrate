(function (){
        /**
     * 
     * 
     * SI ON CLIQUE SUR UN MENU ITEM ON AJOUTE LA CLASSE ACTIVE 
     * ON SUPPRIME LA CLASSE ACTIVE DU PRECEDENT
     */

    var activerItem = function (a){
        divParentItems = a.parentNode.parentNode;
        if(a.parentNode.classList.contains('active'))
        {
            return false;
        }
        //Remove active class to items was selected
        divParentItems.querySelector('.items .active').classList.remove('active');
        //Add active class to items selected
        a.parentNode.classList.add('active');
    }

    var dashItem = document.querySelectorAll('.items .item');
    for (let i = 0; i < dashItem.length; i++) {
        dashItem[i].addEventListener('click', function (e){
            activerItem(this);
        });
        
    }

   
    var hashChange = function (){
        var hash = window.location.hash;
        var a = document.querySelector('a[href="'+hash+'"]');
        if(a !== null && !a.parentNode.classList.contains('active'))
        {
            activerItem(a);
        }
    }
    window.addEventListener('hashchange', hashChange);
    hashChange();
})()
