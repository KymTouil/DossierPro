angular.module('note').controller('homeController', function($scope){
    console.log('hello');

    //Ajouter une note
    $("#btnNew").click(function() {
      addNewNote();
    });

    //Créer une note
    function newNote(){

    };

    //Afficher une note
    function displayNote(){

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

    //Modifier une note
    function modifyNote(){

    };

    //Supprimer une note
    function deleteNote(){

    };
});
