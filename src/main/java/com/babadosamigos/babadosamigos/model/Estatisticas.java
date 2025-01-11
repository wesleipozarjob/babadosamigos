package com.babadosamigos.babadosamigos.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;

@Entity
@Table(name = "estatisticas")
public class Estatisticas {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long ID;

    private String associado;
    private int numero;
    private int amarelo;
    private int vermelho;
    private int gols;
    private int presenca;
    private int azul;
    private double pontuacao;
    private int lider;
    private int vice;
    // Getters and setters

    public Long getID() {
        return ID;
    }

    public void setID(Long ID) {
        this.ID = ID;
    }

    public String getAssociado() {
        return associado;
    }

    public void setAssociado(String associado) {
        this.associado = associado;
    }

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public int getAmarelo() {
        return amarelo;
    }

    public void setAmarelo(int cartaoAmarelo) {
        this.amarelo = cartaoAmarelo;
    }

    public int getVermelho() {
        return vermelho;
    }

    public void setVermelho(int cartaoVermelho) {
        this.vermelho = cartaoVermelho;
    }

    public int getGols() {
        return gols;
    }

    public void setGols(int gols) {
        this.gols = gols;
    }

    public int getPresenca() {
        return presenca;
    }

    public void setPresenca(int presenca) {
        this.presenca = presenca;
    }

    public int getAzul() {
        return azul;
    }

    public void setAzul(int azul) {
        this.azul = azul;
    }

    public double getPontuacao() {
        return pontuacao;
    }

    public void setPontuacao(double pontuacao) {
        this.pontuacao = pontuacao;
    }


    public int getLider() {
        return lider;
    }

    public void setLider(int lider) {
        this.lider = lider;
    }

    public int getVice() {
        return vice;
    }

    public void setVice(int vice) {
        this.vice = vice;
    }
}
