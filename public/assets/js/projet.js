
document.querySelector(".signalerBouton").addEventListener('click', (e) => {
        //e.preventDefault();

        //document.querySelector(".content").innerHTML = "Ce commentaire est en cours de validation après signalement";
        ///console.log(e.originalTarget.parentNode.querySelector(".content"));
        e.originalTarget.parentNode.querySelector(".content").innerHTML = "Ce commentaire est en cours de validation après signalement";
        document.querySelector('.signalerBouton').style.backgroundColor = "red";
        document.querySelector('.signalerBouton').innerHTML = "Déjà signalé";
        //console.log(e);

        fetch(e.originalTarget.dataset.href)
            .then(function(response) {
            if(response.ok) {
                response.blob().then(function(myBlob) {
                const objectURL = URL.createObjectURL(myBlob);
                url = objectURL;
                console.log(url);
                });
            } else {
                console.log('Mauvaise réponse du réseau');
            }
            })
            .catch(function(error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ');
        });
        let url = e.originalTarget.dataset.href;
        console.log(url);
        /*const getData = async function() {
            let response = await fetch('localhost/tpnews5a/e.originalTarget.dataset.href')
            let data = await response.json()
            console.log(data)
        }
        getData();*/

});

