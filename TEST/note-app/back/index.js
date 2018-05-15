
var express = require('express');
var bodyParser = require('body-parser');

var _tokens = [];
var MongoClient = require('mongodb').MongoClient;
var url = 'mongodb://localhost:27017';
var _client = "";

var app = express();

app.use(function(req, res, next) {
  res.header(`Access-Control-Allow-Origin`, `*`);
  res.header(`Access-Control-Allow-Methods`, `GET,PUT,POST,DELETE`);
  res.header(`Access-Control-Allow-Headers`, `Content-Type`);
  next();});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));

MongoClient.connect(url, function(err, client) {
  console.log("Connected successfully to datanote");
  _client = client;});

function _findUser(username) {
 var db = _client.db('datanote');
 db.collection('users').find({}).toArray(function(err, docs){
   return docs.username == username;});};

app.get('/users', function(req, res) {
  var token = '';

  if (req.query.accesstoken) token = req.query.accesstoken;
  if (req.headers.accesstoken) token = req.headers.accesstoken;

  var index = _tokens.indexOf(token);
  var db = _client.db('datanote');

  db.collection('users').find({}).toArray(function(err, docs) {
  res.status(200).send(docs);});});


app.post('/homepage/:_id', function(req, res) {
   var body = req.body;
   var db = _client.db('datanote');
   if(body.titre && body.contenu) {
     var newNote = {
         username: body.username,
         password: body.password,
         email: body.email,
         firstName: body.firstName,
         lastName: body.lastName,
         age: body.age,
         notes:[{datecreation:Date(),datemodification:Date(),titre:body.titre,contenu:body.contenu}
             ]};

   db.collection('users').update({"username": body.username},
                                  {newNote},
                                  { upsert : true}); 
   res.status(200).send('Note created <3');
    }
    else {
     res.status(412).send('There is a problem </3');}});

app.post('/login', function(req, res) {
 var body = req.body;

 if (body.username && body.password) {
   var db = _client.db('datanote');
   db.collection('users').find({username : body.username}).toArray(function(err, docs) {
       if (docs) {
         doc = docs[0];
         console.log(doc.password, body.password)
         if (doc.password == body.password) {
           var token = doc.username + Math.floor(Math.random() * 100000) + 1;
           console.log("test");
           _tokens.push(token);

           res.status(200).send({message: 'Login correct', token: token});
         }
         else {
           res.status(412).send('Password does not match');
         }
       }
       else {
         res.status(404).send('No account found with username: ' + body.username);
       }
   });
 } else {
   res.status(412).send('You should provide a correct username and a password!');
 }
 });

  app.post('/create-account', function(req, res) {
   var body = req.body;
   var db = _client.db('datanote');
   if (body.username && body.password && body.email) {
     if (_findUser(body.username)) {
       res.status(409).send('User already exists with username: ' + body.username);
     } else {
       var newProfile = {
         username: body.username,
         password: body.password,
         email: body.email,
         firstName: body.firstName,
         lastName: body.lastName,
         age: body.age,
         notes:[{datecreation:body.creation,datemodification:body.modification,titre:body.titre,contenu:body.contenu}
             ]};
     db.collection('users').save(newProfile);

     res.status(200).send('User created with success');
  }
  }
else{
  res.status(412).send('You should provide all the required fields: username, password, email');
    }
  });

app.listen(3000, function() {
  console.log('BACKEND LISTENING ON PORT 3000');
  });