# Etapa de construção
FROM maven:3.8.6-amazoncorretto-17 as build
WORKDIR /app
COPY . . 
RUN mvn clean package -X -DskipTests

# Etapa de execução
FROM openjdk:17-ea-10-jdk-slim
WORKDIR /app
COPY --from=build /app/target/*.jar ./babadosamigos.jar
ENTRYPOINT ["java", "-jar", "babadosamigos.jar"]
