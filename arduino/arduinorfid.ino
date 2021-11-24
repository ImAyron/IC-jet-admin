#include <SPI.h>
#include <MFRC522.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

constexpr uint8_t RST_PIN = D3;     // Configuração dos cabos 
constexpr uint8_t SS_PIN = D4;     // Configuração dos cabos 
MFRC522 rfid(SS_PIN, RST_PIN); // Instância da classe MFRC5222
MFRC522::MIFARE_Key key;
String tag;
#define ON_Board_LED 2

//----------------------------------------SSID e Senha do Routeador-------------------------------------------------------------------------------------------------------------//
const char* ssid = "Alvarenga";
const char* password = "mariana18";
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//

ESP8266WebServer server(80);  //--> Server na porta 80

int readsuccess;
byte readcard[4];
char str[32] = "";
String StrUID;
 WiFiClient client;

void setup() {

  Serial.begin(9600);
  SPI.begin(); // Init SPI bus
  rfid.PCD_Init(); // Init MFRC522

  delay(500);

  WiFi.begin(ssid, password); //--> Connect to your WiFi router
  Serial.println("");
  pinMode(ON_Board_LED,OUTPUT); 
  digitalWrite(ON_Board_LED, HIGH); //--> Turn off Led On Board
  Serial.print("Connecting");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    //----------------------------------------Make the On Board Flashing LED on the process of connecting to the wifi router.
    digitalWrite(ON_Board_LED, LOW);
    delay(250);
    digitalWrite(ON_Board_LED, HIGH);
    delay(250);
  }
  digitalWrite(ON_Board_LED, HIGH); //--> Turn off the On Board LED when it is connected to the wifi router.
  //----------------------------------------If successfully connected to the wifi router, the IP Address that will be visited is displayed in the serial monitor
  Serial.println("");
  Serial.print("Successfully connected to : ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());

  Serial.println("Please tag a card or keychain to see the UID !");
  Serial.println("");


}
void loop() {

  readsuccess = getid();
  if(readsuccess) {  
    digitalWrite(ON_Board_LED, LOW);
    HTTPClient http;    //Declare object of class HTTPClient
    String UIDresultSend, postData;
    UIDresultSend = StrUID;
   
    //Post Data
    postData = "UIDresult=" + UIDresultSend;
  
    http.begin(client, "http://192.168.2.12:8000/api");  //Specify request destination
    http.addHeader("Content-Type", "application/x-www-form-urlencoded"); //Specify content-type header
    int httpCode = http.POST(postData);   //Send the request
    String payload = http.getString();    //Get the response payload
  
    Serial.println(UIDresultSend);
    Serial.println(httpCode);   //Print HTTP return code
    Serial.println(payload);    //Print request response payload
    
    http.end();  //Close connection
    delay(1000);
  digitalWrite(ON_Board_LED, HIGH);
  }


}
  int getid() { 
    if ( ! rfid.PICC_IsNewCardPresent()){
           return 0;
    }
   
    if(!  rfid.PICC_ReadCardSerial()) {
      return 0;
    }
   
    Serial.print("THE UID OF THE SCANNED CARD IS : ");

     for(int i=0;i<4;i++){
      readcard[i]=rfid.uid.uidByte[i]; //storing the UID of the tag in readcard
      array_to_string(readcard, 4, str);
      StrUID = str;
      }
    rfid.PICC_HaltA();
    return 1;
  }


void array_to_string(byte array[], unsigned int len, char buffer[]) {
    for (unsigned int i = 0; i < len; i++)
    {
        byte nib1 = (array[i] >> 4) & 0x0F;
        byte nib2 = (array[i] >> 0) & 0x0F;
        buffer[i*2+0] = nib1  < 0xA ? '0' + nib1  : 'A' + nib1  - 0xA;
        buffer[i*2+1] = nib2  < 0xA ? '0' + nib2  : 'A' + nib2  - 0xA;
    }
    buffer[len*2] = '\0';
}