import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({ attributes }) {
  const { heading, percent, promoText, buttonText, images } = attributes;
  const blockProps = useBlockProps.save({ className: 'promo' });

  return (
    <section {...blockProps}>
      <div className="container">
        <div className="img-products-block">
          {images.map((image, index) => (
            <img
              key={index}
              src={image.url}
              alt={image.alt}
              width="580"
            />
          ))}
        </div>

        <div className="promo-content">
          <RichText.Content tagName="h1" value={heading} />
          <p className="promo-text">
            <RichText.Content
              tagName="span"
              className="promo-percent"
              value={percent}
            />
            {' off'}
          </p>
          <RichText.Content
            tagName="p"
            className="promo-text"
            value={promoText}
          />
          <button className="btn btn-shop">
            <RichText.Content tagName="span" value={buttonText} />
          </button>
        </div>
      </div>
    </section>
  );
}