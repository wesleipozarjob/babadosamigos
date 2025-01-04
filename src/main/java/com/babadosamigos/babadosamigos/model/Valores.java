package com.babadosamigos.babadosamigos.model;

import jakarta.persistence.*;
import java.math.BigDecimal;

@Entity
@Table(name = "valores")
public class Valores {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private BigDecimal total_de_gastos;
    private BigDecimal sobra;
    private BigDecimal associados;  // Alterado para "associados"
    private BigDecimal total_em_caixa;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public BigDecimal getTotal_de_gastos() {
        return total_de_gastos;
    }

    public void setTotal_de_gastos(BigDecimal total_gastos) {
        this.total_de_gastos = total_gastos;
    }

    public BigDecimal getSobra() {
        return sobra;
    }

    public void setSobra(BigDecimal sobra) {
        this.sobra = sobra;
    }

    public BigDecimal getAssociados() {  // Alterado o getter
        return associados;
    }

    public void setAssociados(BigDecimal associados) {  // Alterado o setter
        this.associados = associados;
    }

    public BigDecimal getTotal_em_caixa() {
        return total_em_caixa;
    }

    public void setTotal_em_caixa(BigDecimal total_em_caixa) {
        this.total_em_caixa = total_em_caixa;
    }
}
