/* This section of the code registers a new block, sets an icon
and a category, and indicates what type of fields it'll include.
*/
wp.blocks.registerBlockType("brad/border-box", {
  title: "Email Box",
  icon: "email",
  category: "common",
  attributes: {
    content: { type: "string" },
    message: { type: "string" },
    isError: { type: "boolean" },
  },
  /* This configures how the content and color fields will work,
  and sets up the necessary elements */
  edit: function (props) {
    function updateContent(event) {
      props.setAttributes({ content: event.target.value });
      if (event.target.value === "") return updateMessage("");
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (re.test(event.target.value) && event.target.value !== "") {
        updateMessage(`${event.target.value} is a valid email ✓`);
        props.setAttributes({ isError: false });
      } else {
        updateMessage(`${event.target.value} is NOT a valid email ×`);
        props.setAttributes({ isError: true });
      }
    }

    function updateMessage(message) {
      props.setAttributes({ message: message });
    }

    return React.createElement(
      "div",
      null,
      React.createElement("h3", null, "Email Box"),
      React.createElement("label", null, "Email: "),
      React.createElement("input", {
        type: "text",
        value: props.attributes.content,
        placeHolder: "Enter your email here...",
        onChange: updateContent,
      }),
      React.createElement(
        "span",
        {
          style: {
            color: props.attributes.isError ? "red" : "green",
            marginLeft: "5px",
          },
        },
        props.attributes.message
      )
    );
  },
  save: function (props) {
    return wp.element.createElement(
      "h3",
      { style: { border: "none" } },
      props.attributes.content
    );
  },
});
