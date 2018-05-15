angular.module('note').controller('messageController', function($scope, $http, $state, $stateParams){
console.log('hello');
    $scope.dNote = $stateParams;


    $scope.detailNote = detailNote;
    $scope.notes = [];
    displayNotes();
    function displayNotes(){
        $http.get('http://localhost:8000/messages/'+localStorage.getItem('Author')).then(function(response){
           $scope.notes=response.data;
        })
        
    }

    //Créer une note
    $scope.newNote = _newNote;
    function _newNote(titre,contenu){
        
         var notes = {datecreation:new Date(),datemodification:new Date(),titre:titre,contenu:contenu};
             $http.post('http://localhost:8000/message/', {newNote : notes, user: localStorage.getItem('Author')}).then(
        function(response) {
        alert('votre note a bien été créé');
          $state.reload();
        },
        function(response) {
          alert(response.data);
        }
      );

    };

    //Afficher une note
    function detailNote(note){
        $state.go("detail", note);
    };

    //Sauvegarder une note
    function saveNote() {
    var notesArray = [];
    // for each of the notes add a bespoke note object to the array
    notes.find("li > div").each(function (i, e) {
        // save the class attribute of the div, as well as the text for the title and content text areas
        var title = $(e).find("textarea.note-title");
        var content = $(e).find("textarea.note-content");

        notesArray.push({ Index: i, Title: title.val(), Content: content.val()});
    });
}
    //Modifier une note
    function modifyNote(){

    };

    //Supprimer une note
    function deleteNote(){

    };
});
