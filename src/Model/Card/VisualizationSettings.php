<?php

namespace Inserve\MetabaseAPI\Model\Card;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 *
 */
class VisualizationSettings
{
    #[SerializedName('graph.show_goal')]
    protected ?bool $graphShowGoal = null;

    #[SerializedName('graph.show_trendline')]
    protected ?bool $graphShowTrendline = null;

    #[SerializedName('graph.show_values')]
    protected ?bool $graphShowValues = null;

    #[SerializedName('graph.series_order_dimension')]
    protected ?string $graphSeriesOrderDimension = null;

    #[SerializedName('graph.x_axis.title_text')]
    protected ?string $graphXAxisTitleText = null;

    #[SerializedName('graph.y_axis.scale')]
    protected ?string $graphYAxisScale = null;

    #[SerializedName('graph.label_value_frequency')]
    protected ?string $graphLabelValueFrequency = null;

    /** @var string[]|null */
    #[SerializedName('graph.metrics')]
    protected ?array $graphMetrics = null;

    #[SerializedName('graph.label_value_formatting')]
    protected ?string $graphLabelValueFormatting = null;

    #[SerializedName('graph.series_order')]
    protected ?string $graphSeriesOrder = null;

    /** @var string[]|null */
    #[SerializedName('graph.dimensions')]
    protected ?array $graphDimensions = null;
    protected ?string $tablePivotColumn = null;
    protected ?string $tableCellColumn = null;
    protected ?array $columnSettings = null;

    /**
     * @return string|null
     */
    public function getTablePivotColumn(): ?string
    {
        return $this->tablePivotColumn;
    }

    /**
     * @return string|null
     */
    public function getTableCellColumn(): ?string
    {
        return $this->tableCellColumn;
    }

    /**
     * @return bool|null
     */
    public function getGraphShowGoal(): ?bool
    {
        return $this->graphShowGoal;
    }

    /**
     * @return bool|null
     */
    public function getGraphShowTrendline(): ?bool
    {
        return $this->graphShowTrendline;
    }

    /**
     * @return bool|null
     */
    public function getGraphShowValues(): ?bool
    {
        return $this->graphShowValues;
    }

    /**
     * @return string|null
     */
    public function getGraphSeriesOrderDimension(): ?string
    {
        return $this->graphSeriesOrderDimension;
    }

    /**
     * @return string|null
     */
    public function getGraphXAxisTitleText(): ?string
    {
        return $this->graphXAxisTitleText;
    }

    /**
     * @return string|null
     */
    public function getGraphYAxisScale(): ?string
    {
        return $this->graphYAxisScale;
    }

    /**
     * @return string|null
     */
    public function getGraphLabelValueFrequency(): ?string
    {
        return $this->graphLabelValueFrequency;
    }

    /**
     * @return string[]|null
     */
    public function getGraphMetrics(): ?array
    {
        return $this->graphMetrics;
    }

    /**
     * @return string|null
     */
    public function getGraphLabelValueFormatting(): ?string
    {
        return $this->graphLabelValueFormatting;
    }

    /**
     * @return string|null
     */
    public function getGraphSeriesOrder(): ?string
    {
        return $this->graphSeriesOrder;
    }

    /**
     * @return string[]|null
     */
    public function getGraphDimensions(): ?array
    {
        return $this->graphDimensions;
    }

    /**
     * @return array|null
     */
    public function getColumnSettings(): ?array
    {
        return $this->columnSettings;
    }

    /**
     * @param bool|null $graphShowGoal
     *
     * @return self
     */
    public function setGraphShowGoal(?bool $graphShowGoal): self
    {
        $this->graphShowGoal = $graphShowGoal;
        
        return $this;
    }

    /**
     * @param bool|null $graphShowTrendline
     *
     * @return self
     */
    public function setGraphShowTrendline(?bool $graphShowTrendline): self
    {
        $this->graphShowTrendline = $graphShowTrendline;
        
        return $this;
    }

    /**
     * @param bool|null $graphShowValues
     *
     * @return self
     */
    public function setGraphShowValues(?bool $graphShowValues): self
    {
        $this->graphShowValues = $graphShowValues;
        
        return $this;
    }

    /**
     * @param string|null $graphSeriesOrderDimension
     *
     * @return self
     */
    public function setGraphSeriesOrderDimension(?string $graphSeriesOrderDimension): self
    {
        $this->graphSeriesOrderDimension = $graphSeriesOrderDimension;
        
        return $this;
    }

    /**
     * @param string|null $graphXAxisTitleText
     *
     * @return self
     */
    public function setGraphXAxisTitleText(?string $graphXAxisTitleText): self
    {
        $this->graphXAxisTitleText = $graphXAxisTitleText;
        
        return $this;
    }

    /**
     * @param string|null $graphYAxisScale
     *
     * @return self
     */
    public function setGraphYAxisScale(?string $graphYAxisScale): self
    {
        $this->graphYAxisScale = $graphYAxisScale;
        
        return $this;
    }

    /**
     * @param string|null $graphLabelValueFrequency
     *
     * @return self
     */
    public function setGraphLabelValueFrequency(?string $graphLabelValueFrequency): self
    {
        $this->graphLabelValueFrequency = $graphLabelValueFrequency;
        
        return $this;
    }

    /**
     * @param string[]|null $graphMetrics
     */
    public function setGraphMetrics(?array $graphMetrics): self
    {
        $this->graphMetrics = $graphMetrics;
        
        return $this;
    }

    /**
     * @param string|null $graphLabelValueFormatting
     *
     * @return self
     */
    public function setGraphLabelValueFormatting(?string $graphLabelValueFormatting): self
    {
        $this->graphLabelValueFormatting = $graphLabelValueFormatting;
        
        return $this;
    }

    /**
     * @param string|null $graphSeriesOrder
     *
     * @return self
     */
    public function setGraphSeriesOrder(?string $graphSeriesOrder): self
    {
        $this->graphSeriesOrder = $graphSeriesOrder;

        return $this;
    }

    /**
     * @param array|null $graphDimensions
     *
     * @return self
     */
    public function setGraphDimensions(?array $graphDimensions): self
    {
        $this->graphDimensions = $graphDimensions;

        return $this;
    }

    /**
     * @param string|null $tablePivotColumn
     *
     * @return self
     */
    public function setTablePivotColumn(?string $tablePivotColumn): self
    {
        $this->tablePivotColumn = $tablePivotColumn;

        return $this;
    }

    /**
     * @param string|null $tableCellColumn
     *
     * @return self
     */
    public function setTableCellColumn(?string $tableCellColumn): self
    {
        $this->tableCellColumn = $tableCellColumn;

        return $this;
    }

    /**
     * @param array|null $columnSettings
     *
     * @return self
     */
    public function setColumnSettings(?array $columnSettings): self
    {
        $this->columnSettings = $columnSettings;

        return $this;
    }
}
