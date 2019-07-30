package ficha;

import caminho.Caminho;
import descendencia.Descendencia;
import habilidade.Habilidade;
import habitos.Habito;
import idiomas.Idioma;
import inventario.Inventario;
import kikaha.jdbi.serializers.Column;
import kikaha.jdbi.serializers.Entity;
import lombok.Data;
import patrono.Patrono;
import raca.Raca;
import situacao.Situacao;

import java.util.Set;

@Data
@Entity
public class Ficha {

    @Column
    Long idFicha;

    @Column
    Long idRaca;

    @Column
    Long idCidade;

    @Column
    Long idJogador;

    @Column
    String nomePersonagem;

    @Column
    String img;

    @Column
    Long idade;

    @Column
    String afiliacao;

    @Column
    String cla;

    @Column
    Long sorteDia;

    @Column
    Long distForca;

    @Column
    Long distConstituicao;

    @Column
    Long distAgilidade;

    @Column
    Long distDestreza;

    @Column
    Long distInteligencia;

    @Column
    Long distSabedoria;

    @Column
    Long distCarisma;

    @Column
    Long nivelPersonagem;

    @Column
    Long expPersonagem;

    @Column
    String descPersonagem;

    @Column
    String histPersonagem;

    @Column
    String nota;

    @Column
    Long idSanidade;

    Raca raca;

    Set<Caminho> caminhos;

    Set<Descendencia> descendencias;

    Set<Habilidade> habilidades;

    Set<Habito> habitos;

    Set<Idioma> idiomas;

    Set<Inventario> inventarios;

    Set<Patrono> patronos;

    Set<Situacao> situacoes;
}

