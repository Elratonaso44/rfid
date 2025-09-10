#include <HTTPClient.h>
#include <WiFi.h>



const char ssid[] = "FiberCorp WiFi112-2.4GHz";
const char pass[] = "01033718019279";




void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid,pass);
  while(WiFi.status() != WL_CONNECTED){
    Serial.println("Conectando...");
    delay(500);
  }
  Serial.println("Conectado!");

  HTTPClient http;
  http.begin("http://192.168.0.66/esp32/rfid/esp32.php");
  http.addHeader("Content-Type", "application/x-www-form-urlencode");

  int codigo = http.POST("mensaje=Ayyy nena, a tu cola le falta crema");

  String respuesta = http.getString();
  Serial.println(respuesta);

  http.end();

}
void loop() {
  // put your main code here, to run repeatedly:
}
