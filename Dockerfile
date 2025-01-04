# Usar a imagem base do OpenJDK 17
FROM openjdk:17

# Definir um argumento para o arquivo JAR
ARG JAR_FILE=target/*.jar

# Copiar o arquivo JAR gerado pelo Maven/Gradle para o contêiner e renomeá-lo como 'app.jar'
COPY ${JAR_FILE} app.jar

# Definir o comando para rodar a aplicação Java no contêiner
ENTRYPOINT ["java", "-jar", "/app.jar"]
