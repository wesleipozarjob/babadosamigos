package com.babadosamigos.babadosamigos.controller;

import com.babadosamigos.babadosamigos.model.Estatisticas;
import com.babadosamigos.babadosamigos.service.RankingService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.util.List;

@Controller
public class RankingController {

    @Autowired
    private RankingService rankingService; // Injeção do RankingService

    @GetMapping("/ranking")
    public String exibirRanking(Model model) {
        List<Estatisticas> ranking = rankingService.calcularRanking(); // Usando o service para calcular o ranking

        // Adicionando o ranking ao modelo para exibição
        model.addAttribute("ranking", ranking);
        return "ranking"; // A página ranking.html será renderizada
    }
}
