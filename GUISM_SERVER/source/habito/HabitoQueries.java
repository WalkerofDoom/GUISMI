package habito;

import caminho.Caminho;
import descendencia.Descendencia;
import especializacao.Especializacao;
import ficha.Ficha;
import kikaha.jdbi.JDBI;
import org.jdbi.v3.sqlobject.customizer.Bind;
import org.jdbi.v3.sqlobject.customizer.BindBean;
import org.jdbi.v3.sqlobject.statement.SqlQuery;
import raca.Raca;

import java.util.Set;

@JDBI
public interface HabitoQueries {

    @SqlQuery("SELECT * FROM HABITO")
    Set<Habito> findAll();

    @SqlQuery("SELECT HABITO.*,QTDDESCENDENCIAHABITO FROM DESCENDENCIA " +
            "right JOIN DESCENDENCIA_HAS_HABITO ON DESCENDENCIA_HAS_HABITO.IDDESCENDENCIA = DESCENDENCIA.IDDESCENDENCIA " +
            "right JOIN HABITO ON HABITO.IDHABITO = DESCENDENCIA_HAS_HABITO.IDHABITO WHERE DESCENDENCIA.IDDESCENDENCIA = :idDescendencia")
    Set<Habito> findByIdDescendia(@Bind("idDescendencia")Long idDescendencia);

    @SqlQuery("SELECT HABITO.*,CAMINHO_HAS_HABITO.QTDCAMINHOHABITO FROM CAMINHO " +
            "right JOIN CAMINHO_HAS_HABITO ON CAMINHO_HAS_HABITO.IDCAMINHO = CAMINHO.IDCAMINHO " +
            "right JOIN HABITO ON HABITO.IDHABITO = CAMINHO_HAS_HABITO.IDHABITO WHERE CAMINHO.IDCAMINHO = :idCaminho")
    Set<Habito> findByIdCaminho(@Bind("idCaminho")Long idCaminho);


    @SqlQuery("SELECT HABITO.*,RACA_HAS_HABITO.QTDRACAHABITO FROM RACA " +
            "right JOIN RACA_HAS_HABITO ON RACA_HAS_HABITO.IDRACA = RACA.IDRACA " +
            "right JOIN HABITO ON HABITO.IDHABITO = RACA_HAS_HABITO.IDHABITO WHERE RACA.IDRACA = :idRaca")
    Set<Habito> findByIdRaca(@Bind("idRaca")Long idRaca);

    @SqlQuery("SELECT HABITO.*,FICHA_HAS_HABITO.QTDFICHAHABITO FROM FICHA " +
            "right JOIN FICHA_HAS_HABITO ON FICHA_HAS_HABITO.IDFICHA = FICHA.IDFICHA " +
            "right JOIN HABITO ON HABITO.IDHABITO = FICHA_HAS_HABITO.IDHABITO WHERE FICHA.IDFICHA = :idFicha")
    Set<Habito> findByIdFicha(@Bind("idFicha")Long idFicha);

    @SqlQuery("SELECT * FROM HABITO")
    Set<Habito> findByObject();

    @SqlQuery("SELECT HABITO.*,QTDDESCENDENCIAHABITO FROM DESCENDENCIA " +
            "RIGHT JOIN DESCENDENCIA_HAS_HABITO ON DESCENDENCIA_HAS_HABITO.IDDESCENDENCIA = DESCENDENCIA.IDDESCENDENCIA " +
            "RIGHT JOIN HABITO ON HABITO.IDHABITO = DESCENDENCIA_HAS_HABITO.IDHABITO WHERE DESCENDENCIA.IDDESCENDENCIA = :idDescendencia")
    Set<Habito> findByObject(@BindBean Descendencia descendencia);

    @SqlQuery("SELECT HABITO.*,CAMINHO_HAS_HABITO.QTDCAMINHOHABITO FROM CAMINHO " +
            "RIGHT JOIN CAMINHO_HAS_HABITO ON CAMINHO_HAS_HABITO.IDCAMINHO = CAMINHO.IDCAMINHO " +
            "RIGHT JOIN HABITO ON HABITO.IDHABITO = CAMINHO_HAS_HABITO.IDHABITO WHERE CAMINHO.IDCAMINHO = :idCaminho")
    Set<Habito> findByObject(@BindBean Caminho Caminho);


    @SqlQuery("SELECT HABITO.*,RACA_HAS_HABITO.QTDRACAHABITO FROM RACA " +
            "RIGHT JOIN RACA_HAS_HABITO ON RACA_HAS_HABITO.IDRACA = RACA.IDRACA " +
            "RIGHT JOIN HABITO ON HABITO.IDHABITO = RACA_HAS_HABITO.IDHABITO WHERE RACA.IDRACA = :idRaca")
    Set<Habito> findByObject(@BindBean Raca Raca);

    @SqlQuery("SELECT HABITO.*,FICHA_HAS_HABITO.QTDFICHAHABITO FROM FICHA " +
            "RIGHT JOIN FICHA_HAS_HABITO ON FICHA_HAS_HABITO.IDFICHA = FICHA.IDFICHA " +
            "RIGHT JOIN HABITO ON HABITO.IDHABITO = FICHA_HAS_HABITO.IDHABITO WHERE FICHA.IDFICHA = :idFicha")
    Set<Habito> findByObject(@BindBean Ficha ficha);
}