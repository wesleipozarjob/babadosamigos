package com.babadosamigos.babadosamigos.service;

import com.babadosamigos.babadosamigos.model.Estatisticas;
import com.babadosamigos.babadosamigos.repository.EstatisticasRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.stream.Collectors;

@Service
public class RankingService {

    @Autowired
    private EstatisticasRepository estatisticasRepository;

    // Método para calcular o ranking
    public List<Estatisticas> calcularRanking() {
        List<Estatisticas> estatisticas = estatisticasRepository.findAll();

        // Calculando a pontuação de cada associado
        List<Estatisticas> ranking = estatisticas.stream()
                .map(estatistica -> {
                    double pontuacao = calcularPontuacao(estatistica); // Calcula a pontuação
                    estatistica.setPontuacao(pontuacao); // Armazena a pontuação
                    return estatistica;
                })
                .sorted((e1, e2) -> Double.compare(e2.getPontuacao(), e1.getPontuacao())) // Ordena pela pontuação
                .collect(Collectors.toList()); // Coleta em uma lista ordenada

        return ranking;
    }

    // Método que calcula a pontuação do associado
    private double calcularPontuacao(Estatisticas estatistica) {
        double gols = estatistica.getGols() * 3;
        double amarelo = estatistica.getAmarelo() * -0.5;
        double azul = estatistica.getAzul() * -0.7;
        double vermelho = estatistica.getVermelho() * -2;
        double presenca = estatistica.getPresenca() * 1.2;
        double lider = estatistica.getLider() * 4;
        double vice = estatistica.getVice() * 2;
        double pontuacao = gols + amarelo + azul + vermelho + presenca + vice + lider;
        return Math.round(pontuacao * 100.0) / 100.0;
    }

}
