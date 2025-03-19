var net = require('net');

// creates the server
var server = net.createServer();

//emitted when server closes ...not emitted until all connections closes.
server.on('close',function(){
  console.log('Server closed !');
});

server.on('connection',function(socket){

//this property shows the number of characters currently buffered to be written. (Number of characters is approximately equal to the number of bytes to be written, but the buffer may contain strings, and the strings are lazily encoded, so the exact number of bytes is not known.)
//Users who experience large or growing bufferSize should attempt to "throttle" the data flows in their program with pause() and resume().

  console.log('Buffer size : ' + socket.bufferSize);

  console.log('---------server details -----------------');

  var address = server.address();
  var port = address.port;
  var family = address.family;
  var ipaddr = address.address;
  console.log('Server is listening at port' + port);
  console.log('Server ip :' + ipaddr);
  console.log('Server is IP4/IP6 : ' + family);

  var lport = socket.localPort;
  var laddr = socket.localAddress;
  console.log('Server is listening at LOCAL port' + lport);
  console.log('Server LOCAL ip :' + laddr);

  console.log('------------remote client info --------------');

  var rport = socket.remotePort;
  var raddr = socket.remoteAddress;
  var rfamily = socket.remoteFamily;

  console.log('REMOTE Socket is listening at port' + rport);
  console.log('REMOTE Socket ip :' + raddr);
  console.log('REMOTE Socket is IP4/IP6 : ' + rfamily);

  console.log('--------------------------------------------')
//var no_of_connections =  server.getConnections(); // sychronous version
server.getConnections(function(error,count){
  console.log('Number of concurrent connections to the server : ' + count);
});

socket.setEncoding('utf8');

socket.on('data',function(data){
  try{
    var bread = socket.bytesRead;
    var bwrite = socket.bytesWritten;
    console.log('Bytes read : ' + bread);
    console.log('Bytes written : ' + bwrite);
    console.log('Request >>> : ' + data);
    
    var req = JSON.parse(data);
    var response = null;
    
    response=JSON.stringify({"data":{"STAN":100709,"MerchantId":"000885000015999","TerminalID":"DDDEV034","BankDateTime":"2019-04-01T11:08:42","TxnRef":"      101131","CardPAN":"601900******4038   ","Receipt":null,"CardType":"VISA","AuthCode":49051,"status":"Approve","ID":"abcekkfDcvdsddhhhij","result":"APPROVED","surcharge":0.0},"message":"The transaction settled successfully!","nextCommand":"","result":true});
    
    var is_kernel_buffer_full = socket.write(response);
    
    if(is_kernel_buffer_full){
    //console.log('Data was flushed successfully from kernel buffer i.e written successfully!');
    }else{
    socket.pause();
    }
    
    console.log('Response >>> : ' + response);
    socket.end();

  }catch(e){
    console.log('Cloud terminal >>> : Keep alive! ');
  }
  
});

socket.on('drain',function(){
  console.log('write buffer is empty now .. u can resume the writable stream');
  socket.resume();
});

socket.on('error',function(error){
  console.log('Error : ' + error);
});

socket.on("disconnect", function() {
        
  socket.reconnect();

});

socket.on('timeout',function(){
  console.log('Socket timed out !');
  socket.end('Timed out!');
  // can call socket.destroy() here too.
});

socket.on('end',function(data){
  //console.log('Socket ended from other end!');
  //console.log('End data : ' + data);
});

socket.on('close',function(error){
  var bread = socket.bytesRead;
  var bwrite = socket.bytesWritten;
  console.log('Bytes read : ' + bread);
  console.log('Bytes written : ' + bwrite);
  console.log('Socket closed!');
  if(error){
    console.log('Socket was closed coz of transmission error');
  }
}); 


});

// emits when any error occurs -> calls closed event immediately after this.
server.on('error',function(error){
  console.log('Error: ' + error);
});

//emits when server is bound with server.listen
server.on('listening',function(){
  console.log('Server is listening!');
});

server.maxConnections = 10;

//static port allocation
server.listen(3000);

var islistening = server.listening;

